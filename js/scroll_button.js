
function scrollDown() {
  const nextContainer = document.getElementById('scroll-down-animation');
  const nextContainerTop = nextContainer.offsetTop;
  window.scrollTo({ top: nextContainerTop, behavior: 'smooth' });

  // hide the button when scrolling past the next container
  document.getElementById('scroll-down-animation').style.display = 'none';
}

// show the button on page load
document.getElementById('scroll-down-animation').style.display = 'block';

// show the button when scrolling back up to the top
window.addEventListener('scroll', function() {
  if (window.pageYOffset === 0) {
    document.getElementById('scroll-down-animation').style.display = 'block';
  }
  else {
    document.getElementById('scroll-down-animation').style.display = 'none';
  }
});
