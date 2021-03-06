/**
 * @author Mohamed Sami Ashoor <samy.ashoor@gmail.com>
 */

$(document).ready(() => {

    changeColor();
    checkColorInStorage();

});

const handleThemeUpdate = (cssVars) => {
    console.log(cssVars)
    const root = document.querySelector(':root');
    const keys = Object.keys(cssVars);
    keys.forEach(key => {
        root.style.setProperty(key, cssVars[key]);
    });
}

// Check if there is a color saved in localstorage in browser
let checkColorInStorage = () => {
    let color = localStorage.getItem(`color`);
    if(color === null || color == 'undefined') {
        return;
    }
    console.log(color)
    color = JSON.parse(color);
    handleThemeUpdate(color);
    return color;
}

let changeColor = () => {

    let checkColor = checkColorInStorage();
    console.log(checkColor)
    const htmlCode = `<div class="card mb-1">
                        <div role="button" class="card-header" aria-controls="settings-mainNavbar" aria-expanded="true">
                            <h5 class="card-title">Change Color</h5>
                        </div>
                        <div id="settings-mainNavbar" role="tabpanel" style="" class="collapse show">
                            <div class="card-body">
                                <fieldset id="__BVID__33" role="group" aria-labelledby="__BVID__33__BV_label_"
                                    class="b-form-group form-group mb-0">
                                    <div role="group" aria-labelledby="__BVID__33__BV_label_" class="">
                                        <div id="group-mainNavbar-0" role="radiogroup" tabindex="-1" class="">
                                            <div class="custom-control custom-radio custom-control-inline">
                                                <input value="${checkColor ? checkColor['--blue'] : '#007bff'}" class="input-color cursor-pointer h-10 outline-none rounded-full w-10 input-color-picker" type="color" data-id="blue" name="Color">
                                            </div>
                                        </div>
                                    </div>
                                </fieldset>
                            </div>
                        </div>
                    </div>
                    <div class="card mb-1">
                        <div role="button" class="card-header" aria-controls="settings-mainNavbar" aria-expanded="true">
                            <h5 class="card-title">MAIN NAVBAR</h5>
                        </div>
                        <div id="settings-mainNavbar" role="tabpanel" style="" class="collapse show">
                            <div class="card-body">
                                <fieldset id="__BVID__33" role="group" aria-labelledby="__BVID__33__BV_label_"
                                    class="b-form-group form-group mb-0">
                                    <div role="group" aria-labelledby="__BVID__33__BV_label_" class="">
                                        <div id="group-mainNavbar-0" role="radiogroup" tabindex="-1" class="">
                                            <div class="custom-control custom-radio custom-control-inline">
                                                <input value="${checkColor ? checkColor['--dark'] : '#1d2126'}" class="input-color-dark cursor-pointer h-10 outline-none rounded-full w-10 input-color-picker" type="color" data-id="dark" name="Color">
                                            </div>
                                        </div>
                                    </div>
                                </fieldset>
                            </div>
                        </div>
                    </div>
                    `;

    $('#app-settings .p-2').append(htmlCode);

    const dynamicInputs = document.querySelectorAll('input.input-color-picker');

    dynamicInputs.forEach((item) => {
        item.addEventListener('input', (e) => {
            const cssPropName = `--${e.target.getAttribute('data-id')}`;
            const val = e.target.value;
            const colorObj = {
                [cssPropName]: val
            };

            if (checkColor) {
                checkColor[cssPropName] = val;
            } else {
                checkColor = colorObj
            }

            console.log(checkColor)
            
            let storge = localStorage.setItem(`color`, JSON.stringify(checkColor));
            handleThemeUpdate(checkColor);
        });
    });
}