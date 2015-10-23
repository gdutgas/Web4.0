/**
 * Created by bug on 2015/10/13.
 */
function ketangzuoye(){
    //让图片列表显示出来
    document.getElementById("zuoye").style.display = "block";
    //让新闻列表隐藏
    document.getElementById("zhangjie").style.display = "none";
    //让军事列表隐藏
    document.getElementById("shiti").style.display = "none";

    //让图片span去掉背景
    document.getElementById("span_zuoye").style.background = "none";


    //让新闻span加上灰色背景
    document.getElementById("span_zhangjie").style.background = "url(img/11.png) repeat-x";
    //让军事span加上灰色背景
    document.getElementById("span_shiti").style.background = "url(img/11.png) repeat-x";

    //让图片span去掉下边框线
    document.getElementById("span_zuoye").style.borderBottom = "none";
    //让新闻span加上下边框线
    document.getElementById("span_zhangjie").style.borderBottom = "1px solid #CFCFCF";
    //让军事span加上下边框线
    document.getElementById("span_shiti").style.borderBottom = "1px solid #CFCFCF";
}

function zhangjielianxi(){
    //让新闻列表显示出来
    document.getElementById("zhangjie").style.display = "block";
    //让图片列表隐藏
    document.getElementById("zuoye").style.display = "none";
    //让军事列表隐藏
    document.getElementById("shiti").style.display = "none";

    //让新闻span去掉背景
    document.getElementById("span_zhangjie").style.background = "none";
    //让图片span加上灰色背景
    document.getElementById("span_zuoye").style.background = "url(img/11.png) repeat-x";
    //让军事span加上灰色背景
    document.getElementById("span_shiti").style.background = "url(img/11.png) repeat-x";

    //让新闻span去掉下边框线
    document.getElementById("span_zhangjie").style.borderBottom = "none";
    //让图片span加上下边框线
    document.getElementById("span_zuoye").style.borderBottom = "1px solid #CFCFCF";
    //让军事span加上下边框线
    document.getElementById("span_shiti").style.borderBottom = "1px solid #CFCFCF";
}

function wangnianshiti(){
    //让军事列表显示出来
    document.getElementById("shiti").style.display = "block";
    //让图片列表隐藏
    document.getElementById("zuoye").style.display = "none";
    //让新闻列表隐藏
    document.getElementById("zhangjie").style.display = "none";

    //让军事span去掉背景
    document.getElementById("span_shiti").style.background = "none";
    //让图片span加上灰色背景
    document.getElementById("span_zuoye").style.background = "url(img/11.png) repeat-x";
    //让新闻span加上灰色背景
    document.getElementById("span_zhangjie").style.background = "url(img/11.png) repeat-x";

    //让军事span去掉下边框线
    document.getElementById("span_shiti").style.borderBottom = "none";
    //让图片span加上下边框线
    document.getElementById("span_zuoye").style.borderBottom = "1px solid #CFCFCF";
    //让新闻span加上下边框线
    document.getElementById("span_zhangjie").style.borderBottom = "1px solid #CFCFCF";
}

