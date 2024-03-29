{{-- @extends('layouts/frontLayout/front_design')
@section('content') --}}
<style>
  /* Your modal CSS styles here */
  .modal {
      display: none;
      position: fixed;
      z-index: 5;
      left: 0;
      top: 0;
      width: 100%;
      height: 100%;
      overflow: auto;
      backdrop-filter: brightness(0.2);

  }

  .modal-content {
      background-color: #fff;
      margin: 15% auto;
      padding: 20px;
      border: 1px solid #888;
      width: 80%;
  }

  .close {
      color: #aaa;
      float: right;
      font-size: 28px;
      font-weight: bold;
  }

  .close:hover,
  .close:focus {
      color: black;
      text-decoration: none;
      cursor: pointer;
  }
</style>

<!-- Your modal content here -->

<div id="myModal" class="modal">    
    <div class="modal-content modal-dialog">
        <div class=""><span class="close">&times;</span></div>
        <h2>Users Read The Blogs On Their Own Risk</h2>
        <p>Description content goes here.</p>
        <label>
            <input type="checkbox" id="checkBox">
            Accept Terms and Condition.
        </label>
        <div class="pt-3 mx-auto">
          <button id="submitModal" class="readon" >Submit</button>
        </div>
    </div>
</div>

<!-- Button trigger modal -->

  
  <!-- Modal -->
  {{-- <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <label>
            <input type="checkbox" id="checkBox">
            Accept Term And Condition to see our blog.
        </label>
        <div class="modal-footer">
        
          <button type="button" class="btn btn-primary" id="submitModal">Submit</button>
        </div>
      </div>
    </div>
  </div> --}}




  {{-- @endsection('content') --}}






<script>
var modal= document.getElementById('myModal');
  
//Function to close modal
function closeModal(){
  modal.style.display='none';

}
//Function to show modal
function showModal(){
  modal.style.display='block'
}



    // Function to redirect to home page
    function redirectToHomePage() {
      closeModal();
        window.location.href = '{{ url("/") }}';
    }

    // Function to redirect to blog page
    function redirectToBlogPage() {
      showModal();
        window.location.href = '{{ url("/blog") }}';
    }

    // When the checkbox is checked and the submit button is clicked, redirect to blog page
    function redirectToBlogPageFromModal() {
        if (document.getElementById('checkBox').checked) {
            redirectToBlogPage();
        } else {
            redirectToHomePage();
        }
    }

    // When the user clicks on <span> (x), close the modal and redirect to home page
    var span = document.getElementsByClassName('close')[0];
    span.onclick = function () {
        redirectToHomePage();
    }

    // When the user clicks anywhere outside of the modal, close it and redirect to home page
    window.onclick = function (event) {
        var modal = document.getElementById('myModal');
        if (event.target == modal) {
            redirectToHomePage();
        }
    }

    // Automatically open the modal when the blog page is loaded
    window.onload = function () {
        var blogModal = '{{ $modal ?? false }}';
        if (blogModal === 'true') {
            var modal = document.getElementById('myModal');
            modal.style.display = "block";
        }
    }


  // When the user clicks the "Submit" button inside the modal, redirect based on checkbox status
  var submitModalBtn = document.getElementById('submitModal');
    submitModalBtn.onclick = function () {
        redirectToBlogPageFromModal();
    }

</script>



<!-- Your modal script here -->

