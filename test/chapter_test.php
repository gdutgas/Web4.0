<?php 
require_once '../fns/db_fns.php';
require_once '../fns/function_fns.php';
?>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title></title>
    <style type="text/css">
        *{margin: 0;border: 0;}
        #body{width: 740px;height: 400px;}
        #top{height: 50px;background-color:#A9BCD6;width:100%;}
        #top h2{line-height: 50px;}
        #bottom{margin: 10px 10px 0 10px; }
        p{line-height: 60px;font-size: 20px;font-weight: bold;}
		.img{ height: 60px;}
    </style>
	<script>
		function getNextElement(node){    
			if(node.nextSibling.nodeType == 1){    //判断下一个节点类型为1则是“元素”节点   
				return node.nextSibling;    
			}else{      //否则，回调自身函数  
				return getNextElement(node.nextSibling);    
			}    
			return null;
		}
		
		function show_ans(id){
			if(getNextElement(id).style.display!='none'){
				getNextElement(id).style.display='none';
			}else{
				getNextElement(id).style.display='block';
			}
		}
	</script>
</head>
<?php 
	if($_REQUEST['test_type']=''||empty($_REQUEST['test_type'])){
		$test_type='自我检测';
		$test_title='请选择相应测试题';
	}else{
		$test_type=$_GET['test_type'];
		$test_title=$_GET['test_title'];
	}
?>



<body style="overflow: auto;">
<div id="body">
    <div id="top">
        <h2><b><?php echo $test_type." >> ".$test_title; ?></b></h2>
    </div>
    <div id="bottom">
        <?php
			$conn=db_connect();
			if(!conn){
				echo "<script>alert(\"连接数据库失败，请联系管理员！\")</script>";
			}
			$chapter_id=getNum($test_title);//获取章节数（数字）  第1章练习->1
			$query="select * from tb_question where type='".$test_type."' and chapter_id='".$chapter_id."'";
			$result=$conn->query($query);
			$num=$result->num_rows;
			if(!$result){
				echo "<script>alert(\"查询数据库失败，请联系管理员！\")</script>";
			}else{
				
				if($num==0&&!$test_title!=''){//-----------这里判断有误-----------
					echo "<p>该章节没有测试题</p>";
				}
				else{
					$list=array();
					while ($settings=$result->fetch_assoc()){//读取为关联数组，读取一次指针向前移动一位
					array_push($list,$settings);
					}
					foreach($list as $key => $que){//待解决-----------题目过多时出现多余的滚动条（横条）
						echo "<img width=\"700px\" height=\"auto\" style=\"margin-bottom:10px\" src=\"..{$que[que_photo]}\" ;padding:0;  />";
						echo '<input value="查看答案" type="button" onclick=show_ans(this) style="margin-bottom:30px" id="show"/>';
						echo "<img width=\"700px\" height=\"auto\" style=\"margin-bottom:10px;display:none\" src=\"..{$que[ans_photo]}\" />";
					}
					
				}
			}
		
			
			
		?>
    </div>
</div>
</body>
</html>