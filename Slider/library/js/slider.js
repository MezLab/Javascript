/**
* @title jsApp
* @description Slider Js Application
* @author Mez/Massimo Maestri
* @version 1.0
*/

var body, command, slider, objX, thumb, thumbs, thumbsMin, index, r, z, m;

body = document.getElementsByTagName('body');
command = document.getElementById('btn');
slider = document.getElementById('slider');
objX = document.querySelectorAll('.object');
imgX = document.querySelectorAll('.object img');
thumb = document.getElementById('#thumb');
thumbs = document.querySelectorAll('.thumbs');
thumbsMin = document.querySelectorAll('.thumbMin');

objX[0].setAttribute('data-show', 'active');
imgX[0].setAttribute('data-show', 'show');
thumbsMin[0].setAttribute('thumb', 'active');

r = 0;
while (r < objX.length) {
    thumbsMin[r].setAttribute("data-slider", "slide-" + r);
    objX[r].setAttribute("data-slider", "slide-" + r);
    r++;
};

index = 0;
for (let index = 0; index < thumbs.length; index++) {
    thumbs[index].addEventListener('click', active_Thumb);
    thumbs[index].addEventListener('click', select_Thumbs);
}

/**
 * Controllo di selezione
 * Avanti/Indietro
 * @function
 */

function flip_Down(elm, img, bool) {
    if (bool) {
        elm.setAttribute('data-show', 'iactive');
        img.setAttribute('data-show', 'show');
    } else {
        elm.setAttribute('data-show', 'idisable');
        img.setAttribute('data-show', 'hide');
    }
}

function go_Slider(z) {
    var l = name_Data(0);
    console.log(l);
    reset_DataSlider(0);
    var number = number_Data_Slider(l);
    console.log(number);
    switch (z) {
        case 0:
            if (number == objX.length-1) {
                flip_Up(objX[number], imgX[number], false);
                number = 0;
                flip_Up(objX[number], imgX[number], true);
            } else {
                console.log(objX[number]);
                flip_Up(objX[number], imgX[number], false);
                flip_Up(objX[number+1], imgX[number+1], true);
            }
            break;
        case 1:
            if (number == 0) {
                flip_Down(objX[number], imgX[number], false);
                number = objX.length - 1;
                flip_Down(objX[number], imgX[number], true);
            } else {
                flip_Down(objX[number], imgX[number], false);
                number = number-1;
                flip_Down(objX[number], imgX[number], true);
            }
            break;
        default:
            break;
    }

}

function number_Data_Slider(string) {
    var n, str = "";
    n = string.split("");
    for (let index = 0; index < n.length - 1; index++) {
        if (n[index] == "-") {
            while (index < n.length - 1) {
                index++;
                str += n[index];
            }
            break;
        }
    }
    str = parseInt(str);
    return str;

}


/**
 * Frecce di selezione
 * Avanti/Indietro
 * @function
 */

function arrowSlide(string) {
    switch (string) {
        case 'right':
            go_Slider(0);
            select_Object();
            break;
        case 'left':
            go_Slider(1);
            select_Object();
        default:
            break;
    }
}


/**
 * Attiva o Disattiva il Thumb Richiesto
 * @function
 */

function flip_Up(elm, img, bool) {
    if (bool) {
        elm.setAttribute('data-show', 'active');
        img.setAttribute('data-show', 'show');
    } else {
        elm.setAttribute('data-show', 'disable');
        img.setAttribute('data-show', 'hide');
    }
}

/**
 * Controllo dell'attributo
 * @function
 */

function bool(elm, att, f) {
    if (elm.getAttribute(att) == f) {
        return true;
    } else {
        return false;
    }
}


/**
 * Reset dell'impostazione di selezione
 * @function
 */

function reset_DataSlider(n) {
    switch (n) {
        case 0:
            m = 0
            while (m < objX.length) {
                if (bool(objX[m], 'data-show', 'active')) {
                    objX[m].setAttribute('data-show', 'disable');
                    return;
                }
                m++;
            };
            break;
        case 1:
            m = 0
            while (m < thumbsMin.length) {
                if (bool(thumbsMin[m], 'thumb', 'active')) {
                    thumbsMin[m].setAttribute('thumb', '');
                    return;
                }
                m++;
            };
        default:
            break;
    }
}

z = 0;
function active_Thumb() {
    reset_DataSlider(1);
    d = this.querySelectorAll('.thumbMin');
    d[z].setAttribute('thumb', 'active');
}


function name_Data(x) {
    switch (x) {
        case 0:
            var q, name, pos;
            q = 0;
            while (q < objX.length) {
                if (bool(objX[q], 'data-show', 'active') || bool(objX[q], 'data-show', 'iactive')) {
                    name = objX[q].getAttribute('data-slider');
                    q = objX.length;
                }
                q++;
            };
            return name;
            break;
        case 1:
            var q, name;
            q = 0;
            while (q < thumbsMin.length) {
                if (bool(thumbsMin[q], 'thumb', 'active')) {
                    name = thumbsMin[q].getAttribute('data-slider');
                    q = thumbsMin.length;
                }
                q++;
            };
            return name;
            break;
        default:
            break;
    }
}

/**
 * Seleziona l'elemento nella SLIDE
 * @function
 */

function select_Object() {
    var t = 0;
    while (t < thumbsMin.length) {
        var v = bool(thumbsMin[t], 'data-slider', name_Data(0));
        if (v) {
            thumbsMin[t].setAttribute('thumb', 'active');
        } else {
            thumbsMin[t].setAttribute('thumb', '');
        }
        t++;
    };
}

function select_Thumbs() {
    var t = 0;
    while (t < objX.length) {
        var v = bool(objX[t], 'data-slider', name_Data(1));
        if (v) {
            flip_Up(objX[t], imgX[t], v);
        } else {
            flip_Up(objX[t], imgX[t], v);
        }
        t++;
    };
}

body[0].addEventListener('keydown', pressKey);

function pressKey(event){
    var pressLeft = event.which;
    if (pressLeft == 37){
        arrowSlide('left');
    } else if (pressLeft == 39) {
        arrowSlide('right');
    }
}