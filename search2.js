const menuBtn = document.querySelector('.menu-btn');
const hamburger = document.querySelector('.menu-btn_hamburger');
const nav = document.querySelector('.nav');
const menuNav = document.querySelector('.menu-nav');
const navItems = document.querySelectorAll('.menu-nav_item');
const logoDiv = document.querySelector('.logo-div');
const mySearch = document.getElementById('mySearch');


let showMenu = false;

menuBtn.addEventListener('click', toggleMenu);

function toggleMenu(){
    if(!showMenu){
        mySearch.style.zIndex = "1";
        logoDiv.style.display = "none";
        hamburger.classList.add('open');
        nav.classList.add('open');
        menuNav.classList.add('open');
        navItems.forEach(item => item.classList.add('open'));

        showMenu = true;
    }else{
        hamburger.classList.remove('open');
        nav.classList.remove('open');
        menuNav.classList.remove('open');
        navItems.forEach(item => item.classList.remove('open'));
        showLogo();
        showMenu = false;
    }
}

function showLogo(){
    setTimeout(() => {
        logoDiv.style.display = "block";
        mySearch.style.zIndex = "10";
    }, 600);
}







const searchBar = document.getElementById("search-bar");
const jobslist = document.getElementById("jobslist");


const jobs = [
	{ 
        thumbnail: "thumb4.jpg",
        title: "Relational database management systems",

        description: "Optio corrupti vo sit amet consectetur adipisicing elit. Reiciendis aperiam quia error voluptas consequuntur, quo, cum id eius optio corrupti voluptatem debitis commodi qui dolorum earum porro. Sed recusandae commodi at modi delectus quisomnis rem quae earum est, in consequuntur vero obcaecati beatae officia.",

        date: "22 April",
        category: "Database management",
     },

     { 
        thumbnail: "thumb.jpg",
        title: "Creating a payoff matrix.",

        description: "Optio corrupti vo sit amet consectetur adipisicing elit. Reiciendis aperiam quia error voluptas consequuntur, quo, cum id eius optio corrupti voluptatem debitis commodi qui dolorum earum porro. Sed recusandae commodi at modi delectus quisomnis rem quae earum est, in consequuntur vero obcaecati beatae officia.",

        date: "11 January",
        category: "Economics",
     },

     { 
        thumbnail: "thumb2.jpg",
        title: "Conduct a study in the specified field",

        description: "Optio corrupti vo sit amet consectetur adipisicing elit. Reiciendis aperiam quia error voluptas consequuntur, quo, cum id eius optio corrupti voluptatem debitis commodi qui dolorum earum porro. Sed recusandae commodi at modi delectus quisomnis rem quae earum est, in consequuntur vero obcaecati beatae officia.",

        date: "5 May",
        category: "Statistics",
     },

     { 
        thumbnail: "thumb3.jpg",
        title: "Robotic Automation Precedent Study.",
        
        description: "Optio corrupti vo sit amet consectetur adipisicing elit. Reiciendis aperiam quia error voluptas consequuntur, quo, cum id eius optio corrupti voluptatem debitis commodi qui dolorum earum porro. Sed recusandae commodi at modi delectus quisomnis rem quae earum est, in consequuntur vero obcaecati beatae officia.",

        date: "14 February",
        category: "Robotics",
     }

];

const filter = () => {
	jobslist.innerHTML = "";

	const text = searchBar.value.toLowerCase();

	for (let job of jobs) {
		let thumbnail = job.thumbnail.toLowerCase();
		let title = job.title.toLowerCase();
        let description = job.description.toLowerCase();
        let date = job.date.toLowerCase();
        let category = job.category.toLowerCase();

		if (title.indexOf(text) !== -1 || description.indexOf(text) !== -1 || date.indexOf(text) !== -1 || category.indexOf(text) !== -1) {
			jobslist.innerHTML += `<div class="box">

            <div class="img"><img src="images/${thumbnail}" alt=""></div>

            <div class="text">
                <h5>${title}</h5>
                <p>${description}
                </p>
                <p class="icons">
                    <span><i class="far fa-calendar-alt"></i> ${date}</span> <span><i class="fas fa-tag"></i> ${category}</span>
                </p>
            </div>

        </div>`;
		}
	}

	if (jobslist.innerHTML === "") {
		jobslist.innerHTML += `<p id="sorry-text"><i class="fas fa-sad-tear"></i> Sorry, Assignment Not Found </p>`;
	}



};

filter();

searchBar.addEventListener("keyup", filter);



