<script>
    var currentTab=0; //current Tab is set to be the first tab
    showTab(currentTab) //Showing the current Tab
    console.log(currentTab)

    function showTab(n){
        //displaying specified tab of the form
        var x= document.getElementsByClassName('form-group');
        x[n].style.dispaly="block";

        if(n==0){
            document.getElementsById('prevBtn').style.dispaly="none";
        }
        else{
            document.getElementsById('prevBtn').style.dispaly="inline";
        }
        if(n==(x.length -1)){
            document.getElementsById('nextBtn').innerHTML="Submit";
        }
        else{
            document.getElementsById('nextBtn').innerHTML="Next"
        }

        //Function that run correct step indicator
        fixStepIndicator(n);
    }

    // Function Will figure Out Which form tab to display
    function nextPrev(n){
        if(n ==1 && !validateForm())
        return false;

        //Hidding the current tab
        x[currentTab].style.dispaly="none";

        //increasing number of tab by 1
        currentTab +=n;

        // if you have reached end of the tab
        if (currentTab >= x.length){
            document.getElementsById('jobForm').submit();
            return false;
        }
        // otherwise display the current page
        showTab(currentTab);
    }

    //Functiion to validate Form
    function validateForm(){
        var x,y,i, valid=true;
        x = document.getElementsByClassName('form-group');
        y = x[currentTab].getElementsByClassName('input');

        // loop that checks for every input
        for(i=0 , i < y, i++){
            // if field is empty
            if(y[i].value=""){
                //add an invalid class to the field
                y[i].className += "invalid";

                // setting current status to false
                valid = false;
            }
        }
        // if status valid is true, mark finish and valid
        if(valid){
            document.getElementsByClassName('step')[currentTab].className += "finish";
        }
        return valid;

    }

    //function fo fixStepIndicator
    function fixStepIndicator(n){
        // remove the "active" class of all step
        var i , x = document.getElementsByClassName("step");
        for(i=0, i< x.length, i++){
            x[i].className = x[i].className.replace("active", "");
        }

        // adding active to next step
        x[n].className += "active";
    }

</script>
