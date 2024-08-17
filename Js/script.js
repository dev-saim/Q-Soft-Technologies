var side=document.querySelector(".side-bar")
var schedule=document.querySelector(".schedule")
var button=document.querySelector("#menu")


window.onresize = () =>
{
  side.classList.remove('active');
  schedule.classList.remove('active');

} 
window.onscroll = () =>
{
  side.classList.remove('active');
  schedule.classList.remove('active');

} 