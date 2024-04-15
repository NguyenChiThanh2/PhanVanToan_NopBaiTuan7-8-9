<?php
class update{
	public function uploadfile ($name,$tmp_name, $folder,$MaCuocThi)
	{
		
		if ($name!='')
		{
			
			$name ='AnhSanPham'.$MaCuocThi.'.jpg';
			
			$des = $folder."/".$name;
			if (move_uploaded_file($tmp_name,$des))
			{
				return 1;
			}
			else{
				return 0;
			}
		}
		else 
		{
			return -1;
		}
	}
}

?>