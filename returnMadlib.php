<?php
$nounOne = $_POST['nounOne']; 
$nounTwo = $_POST['nounTwo']; 
$nounThree = $_POST['nounThree']; 
$verbOne = $_POST['verbOne']; 
$verbTwo = $_POST['verbTwo']; 
$verbThree = $_POST['verbThree']; 
$adjectiveOne = $_POST['adjectiveOne']; 
$adjectiveTwo = $_POST['adjectiveTwo']; 
$adjectiveThree = $_POST['adjectiveThree']; 
$pronoun = $_POST['pronoun'];

if(preg_match("/^[a-zA-Z -]+$/", $_POST["nounOne"]) === 0){

		print '<span class ="errortext"> You must enter Noun One</span>';

}
if(preg_match("/^[a-zA-Z -]+$/", $_POST["nounTwo"]) === 0){

	print '</br>';
	print '<span class ="errortext"> You must enter Noun Two</span>';

}
if(preg_match("/^[a-zA-Z -]+$/", $_POST["nounThree"]) === 0){

	print '</br>';
	print '<span class ="errortext"> You must enter Noun Three</span>';

}
if(preg_match("/^[a-zA-Z -]+$/", $_POST["verbOne"]) === 0){

	print '</br>';
	print '<span class ="errortext"> You must enter Verb One</span>';

}
if(preg_match("/^[a-zA-Z -]+$/", $_POST["verbTwo"]) === 0){

	print '</br>';
	print '<span class ="errortext"> You must enter Verb Two</span>';

}
if(preg_match("/^[a-zA-Z -]+$/", $_POST["verbThree"]) === 0){
	
	print '</br>';
	print '<span class ="errortext"> You must enter Verb Three</span>';

}
if(preg_match("/^[a-zA-Z -]+$/", $_POST["adjectiveOne"]) === 0){

	print '</br>';
	print '<span class ="errortext"> You must enter Adjective One</span>';

}
if(preg_match("/^[a-zA-Z -]+$/", $_POST["adjectiveTwo"]) === 0){
	
	print '</br>';
	print '<span class ="errortext"> You must enter Adjective Two</span>';

}

if(preg_match("/^[a-zA-Z -]+$/", $_POST["adjectiveThree"]) === 0){

	print '</br>';
	print '<span class ="errortext"> You must enter Adjective Three</span>';

}
if(preg_match("/^[a-zA-Z -]+$/", $_POST["pronoun"]) === 0){
	
	print '</br>';
	print '<span class ="errortext"> You must enter Pronoun</span>';
}
else{
	print '<p class = "text">Hi there! Have you seen my friend? '.$pronoun.' has my '.$nounOne.' and I cannot find them anywhere.';
	print '</br>';
	print 'i hope '.$pronoun.' does not '.$verbOne.' the '.$nounTwo.' into the '.$nounThree.'. That would make me very '.$adjectiveOne.' that I would want to '.$verbTwo.' something. I should '.$adjectiveTwo.' myself and '.$verbThree.' someone if they can find it so i will be '.$adjectiveThree.'.';
	print '</p>';
}


?>