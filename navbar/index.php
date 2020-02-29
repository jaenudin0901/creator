<!DOCTYPE html>
<html>
<head>
	<style >
	*{
		margin: 0px;
		padding: 0px;
	}
		#container ul
		{
			list-style: none;

		}
		#container ul li
		{
			background-color:grey;
			width: 100px;
			border:1px solid white;
			height: 50px;
			line-height: 50px;
			text-align: center;
			float: left;
			color: white;
			font-size: 18px;
			position: relative;

		}
			#container ul li:hover
			{
				background-color: red;
			}
		#container ul ul{
			display: none;
		}
		#container ul li:hover > ul
		{
			display: block;
		}
#container ul ul ul{
	margin-left: 100px;
	top:0px;
	position: absolute;
}
	</style>
	<title>	</title>
</head>
<body>
	<div id="container">
	<ul>	
		<li>Home</li>
		<li>About</li>
		<li>Entertainment
			<ul>
				<li>Lolywood</li>
				<li>Hollywood
				<ul>
					<li>bilal</li>
					<li>ahmad</li>
					<li>arslan</li>
				</ul></li>
				<li>Bollywood</li>
			</ul></li>
		<li>Contact</li>
	</ul>
</div>
</body>
</html>