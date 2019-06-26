$(document).ready(function () {
    if (localStorage.getItem("themeData") === null || undefined || "") {
        let json = [{
            input: [184, 212, 226, 0, 0, 0],
            output: [1]
        }];
        localStorage.setItem("themeData", JSON.stringify(json));
        train(json);
    } else {
        train(JSON.parse(localStorage.getItem("themeData")));
    }
    createTheme();
});
const mind = new brain.NeuralNetwork();
var colJson = null;
var bgJson = null;
var count = 0;

const train = data => {
    mind.train(data);
}
//the users decision is considered and the machine learns new stuff
const decision = (num) => {
    let json = {
        input: [bgJson[0], bgJson[1], bgJson[2], colJson[0], colJson[1], colJson[2]],
        output: [num]
    };
    store(json);
    createTheme();
}
//creates a them as per users input
const createTheme = () => {
    while (true) {
        bgJson = generateColor();
        colJson = generateColor();
        let background = makeColor(bgJson);
        let color = makeColor(colJson);
        let json = [bgJson[0], bgJson[1], bgJson[2], colJson[0], colJson[1], colJson[2]];
        let prob = mind.run(json);
        console.log(prob);
        if (prob[0] >= 0.5 || count < 5) {
            document.documentElement.style.setProperty('--bgColor', background);
            document.documentElement.style.setProperty('--textColor', color);
            count++;
            break;
        }
    }
}
//generates a random rgb color
const generateColor = () => {
    return [Math.random(), Math.random(), Math.random()];
}
//make a css recognizable color from the given json
const makeColor = (json) => {
    return `rgb(${Math.round(json[0]*255)},${Math.round(json[1]*255)},${Math.round(json[2]*255)})`;
}
//adds the json to the mind network as well as the localstorage
const store = data => {
    let json = JSON.parse(localStorage.getItem("themeData"));
    if (json != null) {
        let getStr = JSON.stringify(json);
        let toStore = getStr.slice(0, getStr.length - 1) + "," + JSON.stringify(data) + "]";
        localStorage.setItem("themeData", toStore);
    } else {
        localStorage.setItem("themeData", data);
    }
    mind.train(JSON.parse(localStorage.getItem("themeData")));
}
