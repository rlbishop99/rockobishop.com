const texts = ['Game Developer.', 'Web Developer.', 'Software Engineer.', 'Computer Scientist.'];
const speed = 200;
const pause = 1200; // <--- the longer delay between text direction changes

function typeWriter(i=0, index=1, direction=1) {
  let displayed = texts[i].slice(0, index);
  document.querySelector("#hats").textContent = displayed;

  if (displayed.length >= texts[i].length) { // start removing after pause
    setTimeout(() => typeWriter(i, index-1, -1), pause);
  } else if (displayed.length === 0) { // go to next text after pause
    setTimeout(() => typeWriter((i+1) % texts.length), pause);
  } else { // continue in the current direction
    setTimeout(() => typeWriter(i, index+direction, direction), speed);
  }
}

typeWriter();