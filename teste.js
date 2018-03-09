$(document).ready(function () {


$altura = screen.height;

$largura = screen.width;


if($altura <= 768 && $largura <= 1024 )
{
   location.href = 'Mobile/';
}
else
{
location.href = 'Web/';}



});
