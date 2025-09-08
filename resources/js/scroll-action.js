const scrolls = document.querySelectorAll("#scroll-action");

const observer = new IntersectionObserver(
    (entries) => {
        entries.forEach((entry) => {
            if(entry.isIntersecting){
                entry.target.classList.remove("opacity-0", "translate-y-10");
                entry.target.classList.add("delay-500", "transition-all", "ease-in-out");
            }
        });
    },
    {threshold: 0.5} // 50%見えたら発火
);

scrolls.forEach((scroll) => {
    observer.observe(scroll);
});