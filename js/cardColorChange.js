const box = document.getElementById('preena_card');
  const sub_box = document.getElementById('para_card');
  
  const box_two = document.getElementById('neenu_card');
  const sub_box_two = document.getElementById('para_two_card');

// 👇️ Change text color on mouseover
box.addEventListener('mouseover', function handleMouseOver() {
  box.style.color = 'white';
  sub_box.style.color = 'white';
});

// 👇️ Change text color back on mouseout
box.addEventListener('mouseout', function handleMouseOut() {
  box.style.color = '#4f4f4f';
  sub_box.style.color = '#458C57';
});


// 👇️ Change text color on mouseover
box_two.addEventListener('mouseover', function handleMouseOver() {
  box_two.style.color = 'white';
  sub_box_two.style.color = 'white';
});

// 👇️ Change text color back on mouseout
box_two.addEventListener('mouseout', function handleMouseOut() {
  box_two.style.color = '#4f4f4f';
  sub_box_two.style.color = '#458C57';
});