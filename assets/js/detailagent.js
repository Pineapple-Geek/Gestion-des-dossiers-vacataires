var idNonValide = '';

// Get the modal
var modal = document.getElementById('myModal');
var modal2 = document.getElementById('ShowDIV');
var errorStat = document.getElementById('ErrorStat');
var TypeE = document.getElementById('TypeE');
var DescE = document.getElementById('DescE');

// Get the image and insert it inside the modal - use its "alt" text as a caption
var img1 = document.getElementById('myImg1');
var img2 = document.getElementById('myImg2');
var img3 = document.getElementById('myImg3');
var img4 = document.getElementById('myImg4');
var modalImg = document.getElementById("img01");
var captionText = document.getElementById("caption");
img1.onclick = function(){
  modal.style.display = "block";
  modalImg.src = this.src;
  captionText.innerphp = this.alt;
};
img2.onclick = function(){
  modal.style.display = "block";
  modalImg.src = this.src;
  captionText.innerphp = this.alt;
};
img3.onclick = function(){
  modal.style.display = "block";
  modalImg.src = this.src;
  captionText.innerphp = this.alt;
};
img4.onclick = function(){
  modal.style.display = "block";
  modalImg.src = this.src;
  captionText.innerphp = this.alt;
};
// Get the <span> element that closes the modal
var span = document.getElementsByClassName("closeIMG")[0];

// When the user clicks on <span> (x), close the modal
span.onclick = function() { 
  modal.style.display = "none";
};

function checkValid()
{
    idNonValide = '';
    for (var i = 1; i < 55; i++) {
        var input = document.getElementsByName('validation' + i);
        for (var j = 0; j < input.length; j++)
        {
            if (input[j].checked)
            {
                if(input[j].value === "NonValide")
                {
                    if(idNonValide === '')
                    {
                        idNonValide = input[j].id;
                    }
                    else
                    {
                        idNonValide = idNonValide + "&" + input[j].id;
                    } 
                } 
            }
        }
    }
}

function ShowDIV(){
    checkValid();
    if(idNonValide !== '')
    {
        TypeE.value = idNonValide;
        modal2.style.display = "flex";
        errorStat.value = 1;
        DescE.setAttribute("required", ""); 
    }
    else
    {
        TypeE.value = "";
        modal2.style.display = "none";
        errorStat.value = 0; 
        DescE.removeAttribute("required");  
    } 
}