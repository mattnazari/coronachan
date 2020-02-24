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

let del = document.getElementsByClassName('delete');

function deletePost() {
  let title = document.querySelector('.postTitle').innerHTML;

  console.log(title)

  axios({
    method: 'post',
    url: 'delete_post.php',
    data: {
      title: title
    }
  })
    .then(function (response) {
      console.log(response)
      console.log(response.config)

      location.reload();
    })
}

// Get the modal
var modal = document.getElementById("myModal");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on the button, open the modal
document.getElementById('signin').addEventListener('click', () => {
  modal.style.display = 'block';
})

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}

document.getElementById('sign-in-button').addEventListener('click', () => {
  let signInForm = document.getElementById('sign-in-form');

  const data = new FormData(signInForm);

  axios({
    method: 'post',
    url: 'login.php',
    data: data
  }).then(function (response) {
    console.log("RESPONSE", response);
    location.reload();
  })
})