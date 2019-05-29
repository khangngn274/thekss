<?php 


function cate_parent($levels, $parent=0, $str="" ,$select=0)
{	
	foreach ($levels as $key => $value) {


		$id = $value['category_id'];
		$name = $value['category_name'];
		


		if($value['category_parent_id'] == $parent){
			if ($select !=0 && $id== $select) {
				echo '<option value="'.$id.'" select="selected">'.$str.$name.'</option>';
			}else
			{
				echo '<option value="'.$id.'">'.$str.$name.'</option>';
			}
			cate_parent($levels,$id,$str."--");
		}
	}
		
}




 ?>