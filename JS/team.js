let clr = document.querySelector(".clr")
let clr2 = document.querySelector(".clr2")
let clr3 = document.querySelector(".clr3")
let position = document.querySelectorAll(".position")
let container = document.getElementById("container")
let container1 = document.getElementById("cont1")
let cardback = document.querySelectorAll(".flip-card-back")
export function setTeamThemeElectric() {
    clr.classList.add('clr-elec')
    clr2.classList.add('clr-elec')
    clr3.classList.add('clr-elec')
        // cardback.classList.add("card-back-ev")

    container.classList.add("team-grid-bg-elec")
    container1.classList.add("container1-bg-elec")

    position.forEach(function(element) {
        element.classList.add("posi-elec");
    })
    cardback.forEach(function(ele) {
        ele.classList.add("card-back-ev");
    })
    return

}

export function setTeamThemeGo() {
    clr.classList.add('clr-go')
    clr2.classList.add('clr-go')
    clr3.classList.add('clr-go')
        // cardback.classList.add("card-back-go")
    container.classList.add("team-grid-bg-go")
    container1.classList.add("container1-bg-go")
    position.forEach(function(element) {
        element.classList.add("posi-go");
    })

    cardback.forEach(function(ele) {
        ele.classList.add("card-back-go");
    })
    return
}