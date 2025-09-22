@extends('admin.adminsidebar')

@section('admincontent')

<style>
   .form-label {
      font-weight: 600;
   }

   .card {
      background-color: #f9f9f9;
      border-radius: 10px;
   }
</style>

<div class="container mt-5 mb-5">
   <div class="card shadow-lg p-4">
      <h3 class="mb-4 text-center text-primary">🛒 Product Upload Form</h3>
      <hr>

      <form action="/uploadproduct" method="POST" enctype="multipart/form-data">
         @csrf

         {{-- Product Name --}}
         <div class="form-group mb-3">
            <label for="productname" class="form-label">Product Name</label>
            <input type="text" class="form-control text-white" id="productname" name="productname" placeholder="Enter Product Name" required>
         </div>

         {{-- Product Price --}}
         <div class="form-group mb-3">
            <label for="productprice" class="form-label">Product Price ($)</label>
            <input type="number" class="form-control text-white" id="productprice" name="productprice" placeholder="Enter Product Price" required min="0">
         </div>

         {{-- Product Quantity --}}
         <div class="form-group mb-3">
            <label for="productquantity" class="form-label">Product Quantity</label>
            <input type="number" class="form-control text-white" id="productquantity" name="productquantity" placeholder="Enter Quantity" required min="0">
         </div>

         {{-- Product Category --}}
         <div class="form-group mb-4">
            <label for="productcategory" class="form-label">Product Category</label>
            <select name="productcategory" id="productcategory" class="form-control bg-dark text-white" required>
               <option value="" disabled selected>-- Select Category --</option>
               <option value="Electronics">Electronics</option>
               <option value="Clothing">Clothing</option>
               <option value="Other">Other</option>
            </select>
         </div>

         {{-- Product Image --}}
         <div class="form-group mb-4">
            <label for="productimage" class="form-label">Upload Product Image</label>
            <input type="file" name="productimage" id="productimage" class="form-control bg-dark text-white" accept="image/*" required>
         </div>

         {{-- Submit Button --}}
         <div class="text-center">

               <button type="submit" class="btn btn-success px-5">Upload Product</button>
            
         </div>

      </form>
   </div>
</div>

@endsection