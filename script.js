let allPosts = [];

function fetchAllPosts() {
  axios({
    method: 'get',
    url: 'posts.php'
  })
    .then(function (response) {
      allPosts = response.data
      console.log(allPosts)
      displayPost()
    })
}

fetchAllPosts()


let num = 0;

function displayPost() {
  let title = document.querySelector('.postTitle');
  let content = document.querySelector('.postContent');
  let img = document.querySelector('.postImg');
  let author = document.querySelector('.author');

  title.innerHTML = allPosts[num].post_title;
  content.innerHTML = allPosts[num].post_content;
  img.src = allPosts[num].post_image;
  author.innerHTML = `by ${allPosts[num].username}`;
}

let back = document.getElementById('back');
let next = document.getElementById('next');

back.addEventListener('click', () => {
  if(num === 0){
    num = allPosts.length-1
    fetchAllPosts()
    return
  }
  num--
  fetchAllPosts()
})

next.addEventListener('click', () => {
  if(num === allPosts.length-1){
    num = 0
    fetchAllPosts()
    return
  }
  num++
  fetchAllPosts()
})