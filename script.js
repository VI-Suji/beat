const ring = document.querySelector(".ring");

for (let i = 0; i < 24; i++) {
  const flame = document.createElement("div");
  flame.setAttribute("class", `cap cap${i}`);

  const flameUp = document.createElement("img");
  flameUp.setAttribute("class", `up`);
  flameUp.setAttribute("src", `https://assets.codepen.io/489403/firegif_1.gif`);
  flame.appendChild(flameUp);

  const flameDown = document.createElement("img");
  flameDown.setAttribute("class", `down`);
  flameDown.setAttribute(
    "src",
    `  https://assets.codepen.io/489403/firedown.gif`
  );
  flame.appendChild(flameDown);
  ring.appendChild(flame);
}

const button = document.querySelector("button");
let active = false;

function setActiveTimeline() {
  let activeTl = gsap.timeline();
  activeTl
    .to("circle", { duration: 1, drawSVG: "50% 50%" })
    .to(
      "button",
      {
        duration: 1,
        boxShadow: `0 0 6px rgba(202, 228, 225, 0.92),
    0 0 30px rgba(202, 228, 225, 0.34), 0 0 12px rgba(238, 69, 6, 0.52),
    0 0 21px rgba(238, 69, 6, 0.92), 0 0 34px rgba(238, 69, 6, 0.78),
    0 0 54px rgba(238, 69, 6, 0.92), inset 0 0 6px rgba(202, 228, 225, 0.92),
    inset 0 0 30px rgba(202, 228, 225, 0.34),
    inset 0 0 12px rgba(238, 69, 6, 0.52), inset 0 0 21px rgba(238, 69, 6, 0.92),
    inset 0 0 34px rgba(238, 69, 6, 0.78), inset 0 0 54px rgba(238, 69, 6, 0.92)`
      },
      "-=1"
    )

    .to(
      "#st0",
      {
        duration: 1,
        fill: "#E4836B",
        stroke: "#fff"
      },
      "-=1"
    );
  return activeTl;
}

function setInactiveTimeline() {
  let inactiveTl = gsap.timeline();
  inactiveTl
    .to("circle", { duration: 1, drawSVG: "0% 100%" })
    .to(
      "button",
      {
        duration: 1,
        boxShadow: `0 0 6px rgba(202, 228, 225, 0),
    0 0 30px rgba(202, 228, 225, 0), 0 0 12px rgba(238, 69, 6, 0),
    0 0 21px rgba(238, 69, 6, 0), 0 0 34px rgba(238, 69, 6, 0),
    0 0 54px rgba(238, 69, 6, 0), inset 0 0 6px rgba(202, 228, 225, 0),
    inset 0 0 30px rgba(202, 228, 225, 0),
    inset 0 0 12px rgba(238, 69, 6, 0), inset 0 0 21px rgba(238, 69, 6, 0),
    inset 0 0 34px rgba(238, 69, 6, 0), inset 0 0 54px rgba(238, 69, 6, 0)`
      },
      "-=1"
    )
    .to(
      "#st0",
      {
        duration: 1,
        fill: "#fff",
        stroke: "#E4836B"
      },
      "-=1"
    );
  return inactiveTl;
}

function isTweening() {
  return gsap.isTweening("button") || gsap.isTweening("circle");
}

button.addEventListener("click", function (e) {
  e.preventDefault();
  active = !active;

  if (active) {
    !isTweening() && setActiveTimeline();
  } else {
    !isTweening() && setInactiveTimeline();
  }
});