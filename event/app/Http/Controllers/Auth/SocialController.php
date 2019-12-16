<?php

namespace App\Http\Controllers\Auth;
use App\users;
use App\Http\Controllers\Controller;
use Facebook\Facebook;
use Illuminate\Support\Facades\Cookie;
use Socialite;
class SocialController extends Controller
{
    /**
     * Redirect the user to the GitHub authentication page.
     *
     * @return \Illuminate\Http\Response
     */
    public function redirectToProvider()
    {
        return Socialite::driver('facebook')->stateless()->user();
    }

public function loginsuccess(){
    session_start();
$fb = new Facebook([
    'app_id' => '512194342977013', // Replace {app-id} with your app id
    'app_secret' => '8b4dea9632468db3b9d16cedf4a7024c',
    'default_graph_version' => 'v5.0',
  ]);

$helper = $fb->getRedirectLoginHelper();

try {
  $accessToken = $helper->getAccessToken();
} catch(Facebook\Exceptions\FacebookResponseException $e) {
  echo 'Graph returned an error: ' . $e->getMessage();
  exit;
} catch(Facebook\Exceptions\FacebookSDKException $e) {
  echo 'Facebook SDK returned an error: ' . $e->getMessage();
  exit;
}

if (! isset($accessToken)) {
  if ($helper->getError()) {
    header('HTTP/1.0 401 Unauthorized');
    echo "Error: " . $helper->getError() . "\n";
    echo "Error Code: " . $helper->getErrorCode() . "\n";
    echo "Error Reason: " . $helper->getErrorReason() . "\n";
    echo "Error Description: " . $helper->getErrorDescription() . "\n";
  } else {
    header('HTTP/1.0 400 Bad Request');
    echo 'Bad request';
  }
  exit;
}

$oAuth2Client = $fb->getOAuth2Client();

$tokenMetadata = $oAuth2Client->debugToken($accessToken);
// print_r($tokenMetadata);

$tokenMetadata->validateAppId('512194342977013'); // Replace {app-id} with your app id

$tokenMetadata->validateExpiration();



   
if (! $accessToken->isLongLived()) {
  try {
    $accessToken = $oAuth2Client->getLongLivedAccessToken($accessToken);
  } catch (Facebook\Exceptions\FacebookSDKException $e) {
    echo "<p>Error getting long-lived access token: " . $e->getMessage() . "</p>\n\n";
    exit;
  }

  var_dump($accessToken->getValue());
}

$_SESSION['fb_access_token'] = (string) $accessToken;


 
$curl = curl_init();
// khởi tạo phiên làm việc với Curl
 
curl_setopt($curl, CURLOPT_URL, "https://graph.facebook.com/".$tokenMetadata->getUserId()."?fields=id,name,picture&access_token=".$accessToken->getValue()."");
// khai báo địa chỉ url
 
curl_setopt($curl, CURLOPT_HTTPHEADER, array('Content-type: text/html','charset:UTF-8'));
// gửi một yêu cầu http
 
curl_setopt($curl, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
// khai báo user agent
 
curl_setopt($curl, CURLOPT_REFERER, 'http://google.com');
// cái này khai báo bạn đến từ trang wap nào
 
curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
// thiết lập trả về đối số khi thực hiện phiên Curl
 
curl_setopt($curl, CURLOPT_TIMEOUT, 30);
// set time out tính theo giây.
 
$data = curl_exec($curl);
// thực hiện 1 phiên curl trả về nội dung của trang wap cần grab
 
curl_close($curl);
// kết thúc phiên làm việc với curl
$data = json_decode($data);
// dd($data);
$checkuser = users::where('id_fb',$data->id)->get();
if(count($checkuser) > 0){
  Cookie::queue(Cookie::make('loginfb',json_encode([
    'id_fb'=> $data->id,
    'name'=>$data->name,
    'hinh'=>$data->picture->data->url,
  ]), 2000));
}else{
  $user = new users;
  $user->id_fb =  $data->id;
  $user->name =  $data->name;
  $user->hinh = $data->picture->data->url;
  $user->save();
  Cookie::queue(Cookie::make('loginfb',json_encode([
    'name'=>$data->name,
    'hinh'=>$data->picture->data->url,
  ]), 2000));
}
return redirect('pages/index');
}

public function redirectToGoogle($provider)
{
    return Socialite::driver($provider)->redirect();
}

public function handleGoogleCallback($provider)
{
    

    $user = Socialite::driver($provider)->stateless()->user();
   $this->finddOrCreateUser($user);
   return redirect('pages/index');

}

public function finddOrCreateUser($user){
    
//  dd($user);
    $checkuser = users::where('id_gg', $user->id)->get();
    if (count($checkuser) > 0) {
        Cookie::queue(Cookie::make('logingg', json_encode([
        'id_gg'=>$user->id,
        'name'=>$user->name,
        'email'=>$user->email,
        'hinh'=>$user->avatar,
]), 2000));
    } else {
        $users = new users;
        $users->id_gg =  $user->id;
        $users->name =  $user->name;
        $users->email = $user->email;
        $users->hinh = $user->avatar;
        $users->save();
        Cookie::queue(Cookie::make('logingg', json_encode([
        'name'=>$user->name,
        'email'=>$user->email,
        'hinh'=>$user->avatar,
]), 2000));
    }
    
}

}