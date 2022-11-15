<!DOCTYPE html>
<html>
<head>
	<title>PDF</title>
	<style type="text/css">
		.table-1
		{
			width: 100%;
		    border: 1px solid black;
		    border-collapse: collapse;
		    text-align: center;
		    font-size: 41px;
		    font-weight: 600;
		    color: #0606afeb;
		    background: pink;
		    /*margin: 14px 8px -18px 343px;*/
		}
		.table-2
		{
			width: 100%;
		    border: 1px solid black;
		    border-collapse: collapse;
		    /*text-align: center;*/
		    font-size: 28px;
		    font-weight: 500;
		    color: black;
    		background: gainsboro;
		    /*margin: 17px 14px 36px 343px;*/
		}


	</style>
</head>
<body>
	<table class="table-1">
		<tr>
			<td width="100%">
				Student Information
			</td>
		</tr>
		
	</table>
	<table class="table-2">
		<tr>
			<td style="" width="100%">
				<img src="{{asset($student->image)}}" width="120px" height="120px">
			</td>
		</tr>
		<tr>
			<td width="50%">
				Name
			</td>
			<td width="50%">
				{{$student->name}}
			</td>
		</tr>
		<tr>
			<td width="50%">
				Class
			</td>
			<td width="50%">
				{{$student->class}}
			</td>
		</tr>
		<tr>
			<td width="50%">
				Roll No
			</td>
			<td width="50%">
				{{$student->roll_no}}
			</td>
		</tr>
	</table>
</body>
</html>