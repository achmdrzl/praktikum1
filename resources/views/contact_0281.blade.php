<!DOCTYPE html>
<html>
<head>
	<title>Contact Us</title>
</head>
<style>
  #contact {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#contact td, #contact th {
  border: 1px solid #ddd;
  padding: 8px;
}

#contact tr:nth-child(even){background-color: #f2f2f2;}

#contact tr:hover {background-color: #ddd;}

#contact th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #4CAF50;
  color: white;
}
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #333;
}

li {
  float: left;
}

li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

/* Change the link color to #111 (black) on hover */
li a:hover {
  background-color: #111;
}

</style>
<body>
	<ul>
  <li><a href="{{url('/home_0281')}}">Home</a></li>
  <li><a href="{{url('/artikel_0281')}}">Artikel</a></li>
  <li><a href="{{url('/contact_0281')}}">Contact Us</a></li>
	</ul> 
  <h1>Contact Us</h1> 
   <img src="https://i.ibb.co/D1JP0Vc/01.jpg" style="width: 160px;border-radius: 50px;" align="middle" />
<table id="contact">
  <tr>
    <th>Nama</th>
    <th>Contact</th>
    <th>Social Media</th>
  </tr>
  <tr>
    <td>Achmad Rizal</td>
    <td>achmd.rzl13@gmail.com</td>
    <td>@achmd.rzl</td>
</table>

</body>
</html>