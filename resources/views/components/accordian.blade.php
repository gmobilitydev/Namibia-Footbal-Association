
        
<style>
    .accordion {
    width: 100%;
    }

    .panel {
    display: none;
    overflow: hidden;
    }
</style>

<div class='flex w-full overflow-hidden my-20 mx-auto'>
            
            
                <div class="contents-center"> 
                    @for ($i = 0; $i < 5; $i++)
                    
                        <button class="accordion">
                            <h1>Accordian Item 1</h1>
                        </button>
                        <div class="panel bg-blue-100 p-4 mx-4 w-fit">
                            <!-- Collapsable content -->
                            
                            <!-- end content -->
                        </div>
                    @endfor
                    
                </div>

            </div>

            <script>
            
                var accordElement = document.getElementsByClassName("accordion");
                    
                for (i = 0; i < accordElement.length; i++) {
                    accordElement[i].addEventListener("click", function() {
                        this.classList.toggle("active");
                        var panel = this.nextElementSibling;
                        if (panel.style.display === "block") {
                            panel.style.display = "none";
                        } else {
                            panel.style.display = "block";
                        }
                    });
                }
            </script>