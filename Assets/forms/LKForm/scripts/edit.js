function OpenProfile(EditProfile){
    display = document.getElementById('EditProfile').style.display;
    if(display == 'none') {
        document.getElementById('EditProfile').style.display = "flex";
        document.getElementById('EditAbout').style.display = "none";
        document.getElementById('EditJob').style.display = "none";
    }
    else {
        document.getElementById('EditProfile').style.display = "none";
    }

}

function OpenAbout(EditAbout){
    display = document.getElementById('EditAbout').style.display;
    if(display == 'none') {
        document.getElementById('EditAbout').style.display = "flex";
        document.getElementById('EditProfile').style.display = "none";
        document.getElementById('EditJob').style.display = "none";
        document.getElementById('EditPortfolio').style.display = "none";
    }
    else {
        document.getElementById('EditAbout').style.display = "none";
    }

}

function OpenPortfolio(EditPortfolio){
    display = document.getElementById('EditPortfolio').style.display;
    if(display == 'none') {
        document.getElementById('EditPortfolio').style.display = "flex";
        document.getElementById('EditProfile').style.display = "none";
        document.getElementById('EditAbout').style.display = "none";
        document.getElementById('EditJob').style.display = "none";
    }
    else {
        document.getElementById('EditPortfolio').style.display = "none";
    }

}

function OpenJob(EditJob){
    display = document.getElementById('EditJob').style.display;
    if(display == 'none') {
        document.getElementById('EditJob').style.display = "flex";
        document.getElementById('EditProfile').style.display = "none";
        document.getElementById('EditAbout').style.display = "none";
        document.getElementById('EditPortfolio').style.display = "none";
    }
    else {
        document.getElementById('EditJob').style.display = "none";
    }

}