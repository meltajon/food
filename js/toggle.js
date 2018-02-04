function uncheck(index) {
  var like_list = document.getElementById('like_list').getElementsByTagName('li');
  var dislike_list = document.getElementById('dislike_list').getElementsByTagName('li');
  like_list[index].style.display = '';
  dislike_list[index].style.display = 'none';
  dislike_list[index].childNodes[0].checked = true;
}

function check(index) {
  var like_list = document.getElementById('like_list').getElementsByTagName('li');
  var dislike_list = document.getElementById('dislike_list').getElementsByTagName('li');
  like_list[index].style.display = 'none';
  like_list[index].childNodes[0].checked = false;
  dislike_list[index].style.display = '';
}