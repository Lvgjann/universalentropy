<nav id="sidebar">
    <?php foreach ($sidebarLinks as $category) : ?>
        <?php if (isset($category['title'])) : ?>
            <div class="title">
                <h4><?php echo ($category['title']) ?></h4>
            </div>
        <?php endif; ?>
        <ul>
            <?php foreach ($category['links'] as $link) : ?>
                <li>
                    <?php if (isset($link['link'])) : ?>
                        <a href="<?php echo ($link['link']) ?>" class="<?php if ($currentUrl === $link['link']) : ?>
                                active
                            <?php endif; ?>">
                            <?php echo ($link['text']) ?>
                        </a>
                    <?php else : ?>
                        <button class="dropdown-btn">
                            <?php echo ($link['text']) ?> <i class="fa fa-caret-down"></i>
                        </button>
                        <ul class="dropdown-container">
                            <?php foreach ($link['links'] as $dropdownLink) : ?>
                                <li>
                                    <a href="<?php echo ($dropdownLink['link']) ?>" class="
                                        <?php if ($currentUrl === $dropdownLink['link']) : ?>
                                            active
                                        <?php endif; ?>">
                                        <?php echo ($dropdownLink['text']) ?>
                                    </a>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    <?php endif; ?>
                </li>
            <?php endforeach; ?>
        </ul>
    <?php endforeach; ?>
</nav>
<script>
    var dropdowns = document.querySelectorAll(".dropdown-btn");

    function openDropdown() {
        this.classList.toggle("active");
        var arrow = this.querySelector(".fa-caret-down");
        if (arrow) {
            arrow.classList.toggle("caret-up");
        }
        var dropdownContent = this.nextElementSibling;
        if (dropdownContent.style.maxHeight === "500px") {
            dropdownContent.style.maxHeight = "0px";
            dropdownContent.style.marginBottom = "0";
        } else {
            dropdownContent.style.maxHeight = "500px";
            dropdownContent.style.marginBottom = "0.5rem";
        }
        // wait for transition
        setTimeout(setSidebarPosition, 500);
    }

    for (var i = 0; i < dropdowns.length; i++) {
        if(dropdowns[i].nextElementSibling.querySelector('.active')) {
            openDropdown.call(dropdowns[i]);
        }
        dropdowns[i].addEventListener("click", openDropdown);
    }

    function setSidebarPosition() {
        var navbar = document.querySelector("#navbar");
        var sidebar = document.querySelector("#sidebar");
        var mainContent = document.querySelector("main");
        if (!sidebar || !mainContent) return;
        var pos = sidebar.getBoundingClientRect();
        var mainPos = mainContent.getBoundingClientRect();
        if (mainPos.top <= (navbar ? navbar.offsetHeight : 0) && mainContent.offsetHeight > sidebar.offsetHeight) {
            sidebar.style.position = "fixed";
            if (mainPos.bottom <= sidebar.offsetHeight) {
                sidebar.style.bottom = (window.innerHeight - mainPos.bottom) + "px";
                sidebar.style.top = "auto";
            } else {
                sidebar.style.top = "2rem";
                sidebar.style.bottom = "auto";
            }
        } else {
            sidebar.style.position = "relative";
            sidebar.style.bottom = "auto";
            sidebar.style.top = "auto";
        }
    }

    setSidebarPosition();
    document.addEventListener("scroll", setSidebarPosition);
</script>