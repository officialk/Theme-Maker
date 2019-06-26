$(document).ready(() => {
    loadThemes();
});
var count = 1;
const loadThemes = () => {
    let themeList = JSON.parse(localStorage.getItem("themeData"));
    var html = "<option selected disabled>Choose A Theme</option>";
    themeList.forEach((data, index) => {
        if (data.output[0] == 1) {
            let br = Math.round(data.input[0] * 255);
            let bb = Math.round(data.input[1] * 255);
            let bg = Math.round(data.input[2] * 255);
            let cr = Math.round(data.input[3] * 255);
            let cb = Math.round(data.input[4] * 255);
            let cg = Math.round(data.input[5] * 255);
            html += `<option value="rgb(${br},${bb},${bg})::rgb(${cr},${cb},${cg})" style="background-color:rgb(${br},${bb},${bg})!important;color:rgb(${cr},${cb},${cg})!important">Theme ${count++}</option>`;
        }
    });
    $("#themeDisplay").html(html);
    $('select').formSelect();
}
const changeTheme = data => {
    let ans = data.split("::");
    let background = ans[0];
    let color = ans[1];
    document.documentElement.style.setProperty('--bgColor', background);
    document.documentElement.style.setProperty('--textColor', color);
}
const copyTheme = () => {
    let html = document.innerHTML;
    let bgColor = getComputedStyle(document.documentElement).getPropertyValue('--bgColor');
    let txtColor = getComputedStyle(document.documentElement).getPropertyValue('--textColor');
    let text = `
        :root{
            --bgColor:${bgColor};
            --textColor:${txtColor};
        }
        .theme {
            background-color: var(--bgColor) !important;
            color: var(--textColor) !important;
        }

        .theme:matches(*) {
            background-color: var(--bgColor) !important;
            color: var(--textColor) !important;
        }

        .themeText {
            color: var(--textColor) !important;
        }
    `;
    document.write(text);
    setTimeout(()=>{
        document.write(html);
    },10000);
}
