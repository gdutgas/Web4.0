/**
 * Created by bug on 2015/10/13.
 */
function ketangzuoye(){
    //��ͼƬ�б���ʾ����
    document.getElementById("zuoye").style.display = "block";
    //�������б�����
    document.getElementById("zhangjie").style.display = "none";
    //�þ����б�����
    document.getElementById("shiti").style.display = "none";

    //��ͼƬspanȥ������
    document.getElementById("span_zuoye").style.background = "none";


    //������span���ϻ�ɫ����
    document.getElementById("span_zhangjie").style.background = "url(img/11.png) repeat-x";
    //�þ���span���ϻ�ɫ����
    document.getElementById("span_shiti").style.background = "url(img/11.png) repeat-x";

    //��ͼƬspanȥ���±߿���
    document.getElementById("span_zuoye").style.borderBottom = "none";
    //������span�����±߿���
    document.getElementById("span_zhangjie").style.borderBottom = "1px solid #CFCFCF";
    //�þ���span�����±߿���
    document.getElementById("span_shiti").style.borderBottom = "1px solid #CFCFCF";
}

function zhangjielianxi(){
    //�������б���ʾ����
    document.getElementById("zhangjie").style.display = "block";
    //��ͼƬ�б�����
    document.getElementById("zuoye").style.display = "none";
    //�þ����б�����
    document.getElementById("shiti").style.display = "none";

    //������spanȥ������
    document.getElementById("span_zhangjie").style.background = "none";
    //��ͼƬspan���ϻ�ɫ����
    document.getElementById("span_zuoye").style.background = "url(img/11.png) repeat-x";
    //�þ���span���ϻ�ɫ����
    document.getElementById("span_shiti").style.background = "url(img/11.png) repeat-x";

    //������spanȥ���±߿���
    document.getElementById("span_zhangjie").style.borderBottom = "none";
    //��ͼƬspan�����±߿���
    document.getElementById("span_zuoye").style.borderBottom = "1px solid #CFCFCF";
    //�þ���span�����±߿���
    document.getElementById("span_shiti").style.borderBottom = "1px solid #CFCFCF";
}

function wangnianshiti(){
    //�þ����б���ʾ����
    document.getElementById("shiti").style.display = "block";
    //��ͼƬ�б�����
    document.getElementById("zuoye").style.display = "none";
    //�������б�����
    document.getElementById("zhangjie").style.display = "none";

    //�þ���spanȥ������
    document.getElementById("span_shiti").style.background = "none";
    //��ͼƬspan���ϻ�ɫ����
    document.getElementById("span_zuoye").style.background = "url(img/11.png) repeat-x";
    //������span���ϻ�ɫ����
    document.getElementById("span_zhangjie").style.background = "url(img/11.png) repeat-x";

    //�þ���spanȥ���±߿���
    document.getElementById("span_shiti").style.borderBottom = "none";
    //��ͼƬspan�����±߿���
    document.getElementById("span_zuoye").style.borderBottom = "1px solid #CFCFCF";
    //������span�����±߿���
    document.getElementById("span_zhangjie").style.borderBottom = "1px solid #CFCFCF";
}

