function animate_x(element, target, step_) {
    clearInterval(element.timeId);
    element.timeId = setInterval(function(){  //定时器的id值存储到对象的一个属性中
        var current = element.offsetLeft;   //获取元素的当前的位置,数字类型
        var step = step_;   //每次移动的距离
        step = current < target ? step : -step;
        current += step;    //移动
        if (Math.abs(current - target) > Math.abs(step)) {
            element.style.left = current + "px";
        } else {
            clearInterval(element.timeId);  //清理定时器
            element.style.left = target + "px"; //直接到达目标
        }
    }, 5);
}
function animate_x_once(element, target, step_) {
    var current = element.offsetLeft;   //获取元素的当前的位置,数字类型
    var step = step_;   //每次移动的距离
    step = current < target ? step : -step;
    current += step;    //移动
    if (Math.abs(current - target) > Math.abs(step)) {
        element.style.left = current + "px";
    } else {
        element.style.left = target + "px"; //直接到达目标
    }
}
function animate_y_once(element, target, step_) {
    var current = element.offsetTop;   //获取元素的当前的位置,数字类型
    var step = step_;   //每次移动的距离
    step = current < target ? step : -step;
    current += step;    //移动
    if (Math.abs(current - target) > Math.abs(step)) {
        element.style.left = current + "px";
    } else {
        element.style.left = target + "px"; //直接到达目标
    }
}