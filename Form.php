<!DOCTYPE HTML>
<html>
	<head>
		<meta charset="utf-8"/>
		<title>Форма</title>
	</head>
	<body>
			<table border="2" width="500" height="500" bgcolor="#AEEEEE">
			<tr>
				<td  align="right">Фамилия</td>
				<td  bgcolor="#BBFFFF">
					<input type="text" name="name1" width="300"/>
				</td>
			</tr>
			<tr>
			<td align="right">Имя</td>
				<td bgcolor="#BBFFFF">
					<input type="text" name="name2" width="300"/>
				</td>
			</tr border="0">
			<tr>
				<td align="right">Отчество</td>
				<td bgcolor="#BBFFFF">
					<input type="text" name="name3" width="300"/>
				</td>
			</tr>
			<tr>
				<td align="right">Выберите товар</td>
				<td bgcolor="#BBFFFF">
					<input type="radio" name="item" value="cheese" id="g1"  checked />
					<label for="g1">сыр</label><br/>
					<input type="radio" name="item" value="bread" id="g2"/>
					<label for="g2">хлеб</label><br/>
					<input type="radio" name="item" value="butter" id="g3"/>
					<label for="g3">масло</label><br/>
					<input type="radio" name="item" value="milk" id="g4"/>
					<label for="g4">молоко</label><br/>
				</td>
			</tr>
			<td align="right">Количество</td>
				<td bgcolor="#BBFFFF">
					<select name="qty" size="1"/>
						<option value="1">1</option>
						<option value="2">2</option>
						<option value="3">3</option>
						<option value="4">4</option>
						<option value="5">5</option>
						<option value="6">6</option>
						<option value="7">7</option>						
					</select>
				</td>
			</tr>
			<tr>
				<td align="right">Комментарий</td>
				<td bgcolor="#BBFFFF">
					<textarea name="me" cols="20" rows="5"/></textarea>
				</td>
			</tr>
			<tr>
			<td align="right"> </td>
				<td bgcolor="#BBFFFF">
					<input type="submit" name="sub" value="Заказать"/>
				</td>
			</tr>		
			</table>
			<form/>
	</body>

</html>
