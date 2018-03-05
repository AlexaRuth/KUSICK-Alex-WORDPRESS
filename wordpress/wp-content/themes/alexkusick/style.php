/*
Theme Name: Alex Kusick's Theme
Version: 1.0
Author: Alexandra R Kusick
Description: A custom theme developed in IDM:6630
*/

@import url('https://fonts.googleapis.com/css?family=Junge|Poppins:500');

* {
line-height: 1.15;
-ms-text-size-adjust: 100%;
-webkit-text-size-adjust: 100%;
}

body{
	font-family: 'Junge', serif;
	font-size: 12pt;
	font-weight: 300;
	line-height: 1em;
	color: #585858;
	max-width: 720px;
	padding: 20px;
	margin: auto;
	background-color: #ffffff;

h1 {
	font-family: 'Poppins', sans-serif;
	font-weight: 500;
	font-size: 32pt;
	color: #FFCC33;
}

h2 {
	font-family: 'Poppins', sans-serif;
	font-weight: 500;
	font-size: 24pt;
	}

h3 {
	font-family: 'Junge', serif;
	font-weight: 300;
	font-size: 20pt;
	}

.post{
background-color: #f4f4f4
}

a {
	text-decoration: none;
	color: #585858;
	}

a:hover {
	color:darkturquoise;
	}

/* List */

ul{
	display: table;
	list-style-type: none;
	}

li {
	margin-bottom: .75rem;
	list-style-type: none;
	}


li ul li {
	border-bottom: 0;
	border-left: 0;
	border-right: 0;
	border-top: 1px solid #aaa;
	display: block;
	float: left;
	margin: 0;
	text-align: center;
	text-transform: uppercase;
	width: 50%;
	}

/* Forms */

.data{
	padding: 10px;
	border: solid 5pt;
	border-color: #334BFF;
	background-color: white;
	align-content: center;
	margin: auto;   
	}

input[type=button], input[type=submit]{
	background-color: #FFCC33;
	border: none;
	color: white;
	padding: 16px 10px;
	text-decoration: none;
	width: 100%;
	cursor:pointer;
	}

input[type=button]:hover {
	background-color: #4CAF50;
	color: white;
	}

form:not(.site-edit) input {
	display: block;
	font-size: 1.5rem;
	line-height: 3rem;
	width: 100%;
	}

form:not(.site-edit) input[type=submit] {
	background-color: #FFCC33;
	text-transform: uppercase;
	}


input::placeholder {
	color: #ddd;
	font-weight: 700;
	text-transform: uppercase;
	}


/* Footer */

footer p{
	font-size: 12px;
	color: #FFCC33;
	align-content: center;
	}
