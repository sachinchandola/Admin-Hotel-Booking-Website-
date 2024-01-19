<div class="container-fluid pt-4 px-4">
    <div class="bg-secondary rounded-top p-4">
        <div class="row">
            <div class="col-12 col-sm-6 text-center text-sm-start">
                Designed and developed by <a class="app-link" href="https://webappssoft.com/" target="_blank">Webapps
                    Software Solutions</a>
            </div>

        </div>
    </div>
</div>

</div>
<!-- Content End -->

<!-- <script>
    $(document).ready(function() {

        $("#state").on("change", function() {
            var state = $("#state").val();

            loaddata(state);


            function loaddata(state) {
                $.ajax({
                    url: "addhotel",
                    type: "post",
                    data: {
                        idd: state
                    },
                    success: function(data) {
                        // alert(data);
                        $('#city').html(data);
                    }
                });
            }
        });
    });
</script> -->

<script>
    const activepage = window.location;
    const navlinks = document.querySelectorAll('nav a').forEach(link => {
        if (link.href.includes(`${activepage}`)) {
            link.classList.add('active');
            link.parentElement.parentElement.parentElement.childNodes[1].classList.add('active');
        }
    })
</script>
<script>
    setInterval(function () {
        $(".alert").fadeOut();
    }, 3000);
</script>


<script>
    function regex(e) {
        var x = e.which || e.keycode;
        if ((x >= 48 && x <= 57))
            return true;
        else
            return false;
    }
</script>

<script>
    function valid() {
        var form = document.getElementById("form");
        var email = document.getElementById("email").value;
        var text = document.getElementById("text");
        // var btn = document.getElementById("btn");
        // btn.preventDefault();
        var pattern = /^[^ ]+@[^ ]+\.[a-z]{2,3}$/;

        if (email.match(pattern)) {
            form.classList.add("valid");
            form.classList.remove("invalid");
            text.innerHTML = "Your Email Address is Valid.";
            text.style.color = "#00ff00";
        } else {
            form.classList.remove("valid");
            form.classList.add("invalid");
            text.innerHTML = "Please Enter Valid Email Address.";
            text.style.color = "#ff0000";
            return false;

            if (email == "") {
                form.classList.remove("valid");
                form.classList.remove("invalid");
                text.innerHTML = "";
                text.style.color = "#00ff00";
            }
        }

    }




    function offerr() {
        var form = document.getElementById("form");
        var offer = document.getElementById("offer").value;
        var textt = document.getElementById("textt");
        // var btn = document.getElementById("btn");
        // btn.preventDefault();

        var pattern = /^([1-9][0-9]?|100)$/;

        if (offer.match(pattern)) {
            form.classList.add("valid");
            form.classList.remove("invalid");
            textt.innerHTML = "";
            textt.style.color = "#00ff00";
        } else {
            form.classList.remove("valid");
            form.classList.add("invalid");
            textt.innerHTML = "Offer range must be 1 to 100.";
            textt.style.color = "#ff0000";


            if (offer == "") {
                form.classList.remove("valid");
                form.classList.remove("invalid");
                textt.innerHTML = "";
                textt.style.color = "#00ff00";
            }
        }

    }
</script>

<!-- <script>
$(document).ready(function(){
   
    $("#state").on("change",function(){
        var state = $("#state").val();

        loaddata(state);
      var href = window.location.href;
        
        function loaddata(state){
             $.ajax({
                url: href,
                type: "post",
                data: {idd: state},
                success: function(data){
                    // alert(data);
                    $('#city').html(data);
                }
             });
        }
    });
});

</script> -->


<script>
    // Define an object with cities for each state
    const citiesByState = {
        "Andhra Pradesh": ["Amaravati", "Visakhapatnam", "Vijayawada", "Tirupati"],
        "Arunachal Pradesh": ["Itanagar", "Naharlagun"],
        "Assam": ["Dispur", "Guwahati", "Silchar", "Dibrugarh"],
        "Bihar": ["Patna", "Gaya", "Muzaffarpur", "Bhagalpur"],
        "Chhattisgarh": ["Raipur", "Bilaspur", "Durg", "Raigarh"],
        "Goa": ["Panaji", "Margao", "Vasco da Gama"],
        "Gujarat": ["Gandhinagar", "Ahmedabad", "Surat", "Vadodara"],
        "Haryana": ["Chandigarh", "Faridabad", "Gurgaon", "Rohtak"],
        "Himachal Pradesh": ["Shimla", "Mandi", "Dharamshala", "Kullu"],
        "Jharkhand": ["Ranchi", "Jamshedpur", "Dhanbad", "Bokaro"],
        "Karnataka": ["Bangalore", "Mysore", "Hubli", "Mangalore"],
        "Kerala": ["Thiruvananthapuram", "Kochi", "Kozhikode", "Thrissur"],
        "Madhya Pradesh": ["Bhopal", "Indore", "Jabalpur", "Gwalior"],
        "Maharashtra": ["Mumbai", "Pune", "Nagpur", "Nashik"],
        "Manipur": ["Imphal"],
        "Meghalaya": ["Shillong"],
        "Mizoram": ["Aizawl"],
        "Nagaland": ["Kohima", "Dimapur"],
        "Odisha": ["Bhubaneswar", "Cuttack", "Puri", "Rourkela"],
        // Add more cities for other states here
    };


    // Function to update the city dropdown based on the selected state
    // function updateCities() {
    //     const stateDropdown = document.getElementById("state");
    //     const cityDropdown = document.getElementById("city");
    //     const selectedState = stateDropdown.value;

    //     // Clear the city dropdown
    //     cityDropdown.innerHTML = "<option value=''>Select District</option>";

    //     // Populate the city dropdown based on the selected state
    //     if (selectedState in citiesByState) {
    //         const cities = citiesByState[selectedState];
    //         cities.forEach((city) => {
    //             const option = document.createElement("option");
    //             option.value = city;
    //             option.textContent = city;
    //             cityDropdown.appendChild(option);
    //         });
    //     }
    // }

    // Attach the updateCities function to the state dropdown's change event
    // const stateDropdown = document.getElementById("state");
    // stateDropdown.addEventListener("change", updateCities);

    // Initialize the city dropdown
    // updateCities();
</script>



<script>


    function preview() {
        let input = document.getElementById("file");
        let container = document.getElementById("images");
        container.innerHTML = '';

        for (i of input.files) {
            let reader = new FileReader();
            let fig = document.createElement("figure");

            reader.onload = () => {
                let img = document.createElement("img");
                img.setAttribute("src", reader.result);
                img.style.width = '100px';
                img.style.height = '100px';
                fig.appendChild(img);
            }
            container.appendChild(fig);
            reader.readAsDataURL(i);

        }
    }
</script>


<script>


    function preview1() {
        let input = document.getElementById("file1");
        let container = document.getElementById("images4");
        container.innerHTML = '';


        for (i of input.files) {
            let reader = new FileReader();
            let fig = document.createElement("figure");

            reader.onload = () => {
                let img = document.createElement("img");
                img.setAttribute("src", reader.result);
                fig.appendChild(img);
            }
            container.appendChild(fig);
            reader.readAsDataURL(i);

        }
    }
</script>

<script>


    function preview2() {
        let input = document.getElementById("file2");
        let container = document.getElementById("images2");
        container.innerHTML = '';

        for (i of input.files) {
            let reader = new FileReader();
            let fig = document.createElement("figure");

            reader.onload = () => {
                let img = document.createElement("img");
                img.setAttribute("src", reader.result);
                fig.appendChild(img);
            }
            container.appendChild(fig);
            reader.readAsDataURL(i);

        }
    }
</script>

<script>


    function preview3() {
        let input = document.getElementById("file3");
        let container = document.getElementById("images3");
        container.innerHTML = '';

        for (i of input.files) {
            let reader = new FileReader();
            let fig = document.createElement("figure");

            reader.onload = () => {
                let img = document.createElement("img");
                img.setAttribute("src", reader.result);
                fig.appendChild(img);
            }
            container.appendChild(fig);
            reader.readAsDataURL(i);

        }
    }
</script>


<script>
    function mFunction(e) {
        e.preventDefault;
        console.log(e.value);
        document.getElementById("delet").value = e.value;
    }
</script>

<!-- Back to Top -->
<!-- <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
</div> -->
<script>
    function Function(e) {
        console.log(e.value);
        document.getElementById("delete").value = e.value;
    }
</script>


<script>
    function stateFunction(e) {
        var dataValue = e.getAttribute("data-value");
        console.log(e.value);
        console.log(dataValue);
        document.getElementById("deletee").value = e.value;
        document.getElementById("hidee").value = dataValue;
    }
</script>

<script>
    function myRemoveFunction() {
        var textRemove = document.getElementById("tutorial");
        textRemove.remove();
    }
</script>
<!-- JavaScript Libraries -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="lib/chart/chart.min.js"></script>
<script src="lib/easing/easing.min.js"></script>
<script src="lib/waypoints/waypoints.min.js"></script>
<script src="lib/owlcarousel/owl.carousel.min.js"></script>
<script src="lib/tempusdominus/js/moment.min.js"></script>
<script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
<script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

<!-- Template Javascript -->
<script src="js/main.js"></script>
<script src="//cdn.datatables.net/1.13.5/js/jquery.dataTables.min.js"></script>
<script>
    $(document).ready(function () {
        $('#myTable').DataTable();
    });
</script>
<script>
    $('#myTable').DataTable({
        "dom": "<'dt--top-section'<'row'<'col-12 col-sm-6 d-flex justify-content-sm-start justify-content-center'l><'col-12 col-sm-6 d-flex justify-content-sm-end justify-content-center mt-sm-0 mt-3'f>>>" +
            "<'table-responsive'tr>" +
            "<'dt--bottom-section d-sm-flex justify-content-sm-between text-center'<'dt--pages-count  mb-sm-0 mb-3'i><'dt--pagination'p>>",
        "oLanguage": {
            "oPaginate": {
                "sPrevious": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-left"><line x1="19" y1="12" x2="5" y2="12"></line><polyline points="12 19 5 12 12 5"></polyline></svg>',
                "sNext": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>'
            },
            "sInfo": "Showing page _PAGE_ of _PAGES_",
            "sSearch": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>',
            "sSearchPlaceholder": "Search...",
            "sLengthMenu": "Results :  _MENU_",
        },
        "stripeClasses": [],
        "lengthMenu": [7, 10, 20, 50],
        "pageLength": 7
    });
</script>


<script>
    $(document).ready(function () {
        // for status
        $('#status').on('change', function () {
            console.log('dhdhsbhd');
            var checked = this.checked;
            if (checked == true) {
                $("#page_status").val('Y')
            } else {
                $("#page_status").val('N')
            }
        });
    });
</script>


</body>

</html>