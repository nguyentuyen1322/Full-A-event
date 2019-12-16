import del from "del";

export const cleanDist = () => {
	return del("dist")
}

export const cleanImage = () => {
	return del("dist/images")
}

export const cleanVideo = () => {
	return del("dist/vid")
}

export const cleanComponents = () => {
	return del("src/components/**")
}

module.exports = {
	cleanDist,
	cleanImage,
	cleanComponents,
	cleanVideo
};