<?php

 function getRight($userName,$tableName) {
		$res=M('admin')
		->field('role_id')
		->join('right join rms_people_role on admin.id=rms_people_role.people_id')
		->where("name='%s'",$userName)
		->select();
		if(is_array($res) && count($res)>0) {
			$roleId=$res[0]['role_id'];
			$where['role_id'] = $roleId;
			$where['table_name'] = $tableName;
			$data=M('rms_right_role_tables')
			->field('right_id')
			->join('rms_tables on rms_tables.id=rms_right_role_tables.table_id')
			->where($where)
			->select();
			if ( is_array($data) && count($data)>0 ) {
				$rightId=$data[0]['right_id'];
				return $rightId;
			} else {
				return '0000';
			}
		} else {
			return '0000';
		}
	}
?>
