
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Information Form</title>

    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>

<body class="m-0 bg-gray-100 p-5 font-sans">

    <div class="mx-auto max-w-[700px] rounded-lg bg-white p-[25px] shadow-lg shadow-black/20">

        <h2 class="mb-6 text-center text-2xl font-bold text-gray-800">
            Student Information Form
        </h2>

        <form action="Output.php" method="post" enctype="multipart/form-data">

            <!-- Personal Information -->
            <fieldset class="mb-5 rounded-md border border-gray-300 p-[15px]">
                <legend class="font-bold text-blue-600">
                    Personal Information
                </legend>

                <label for="name" class="mb-[5px] mt-3 block">Full Name:</label>
                <input type="text" id="name" name="name"
                    class="box-border w-full rounded border border-gray-300 p-[9px] focus:border-blue-500 focus:outline-none">

                <label for="pob" class="mb-[5px] mt-3 block">Place of Birth (POB):</label>
                <input type="text" id="pob" name="pob" 
                    class="box-border w-full rounded border border-gray-300 p-[9px] focus:border-blue-500 focus:outline-none">

                <label for="dob" class="mb-[5px] mt-3 block">Date of Birth (DOB):</label>
                <input type="date" id="dob" name="dob" 
                    class="box-border w-full rounded border border-gray-300 p-[9px] focus:border-blue-500 focus:outline-none">

                <label for="address" class="mb-[5px] mt-3 block">Address:</label>
                <input type="text" id="address" name="address" 
                    class="box-border w-full rounded border border-gray-300 p-[9px] focus:border-blue-500 focus:outline-none">

                <label for="gender" class="mb-[5px] mt-3 block">Gender:</label>
                <select id="gender" name="gender" 
                    class="box-border w-full rounded border border-gray-300 bg-white p-[9px]">
                    <option value="">Select Gender</option>
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                </select>

                <label for="telephone" class="mb-[5px] mt-3 block">Telephone:</label>
                <input type="tel" id="telephone" name="telephone" 
                    class="box-border w-full rounded border border-gray-300 p-[9px] focus:border-blue-500 focus:outline-none">

                <label for="email" class="mb-[5px] mt-3 block">Email:</label>
                <input type="email" id="email" name="email" 
                    class="box-border w-full rounded border border-gray-300 p-[9px] focus:border-blue-500 focus:outline-none">

                <label for="image" class="mb-[5px] mt-3 block">Student Image:</label>
                <input type="file" id="image" name="image"
                    accept="image/*"
                    class="box-border w-full rounded border border-gray-300 p-[9px]">
            </fieldset>

            <!-- Parent Information -->
            <fieldset class="mb-5 rounded-md border border-gray-300 p-[15px]">
                <legend class="font-bold text-blue-600">
                    Parent Information
                </legend>

                <label for="parent_name" class="mb-[5px] mt-3 block">Parent Name:</label>
                <input type="text" id="parent_name" name="parent_name" 
                    class="box-border w-full rounded border border-gray-300 p-[9px] focus:border-blue-500 focus:outline-none">

                <label for="parent_phone" class="mb-[5px] mt-3 block">Parent Telephone:</label>
                <input type="tel" id="parent_phone" name="parent_phone" 
                    class="box-border w-full rounded border border-gray-300 p-[9px] focus:border-blue-500 focus:outline-none">

                <label for="relationship" class="mb-[5px] mt-3 block">Relationship:</label>
                <select id="relationship" name="relationship" 
                    class="box-border w-full rounded border border-gray-300 bg-white p-[9px]">
                    <option value="">Select Relationship</option>
                    <option value="Father">Father</option>
                    <option value="Mother">Mother</option>
                    <option value="Guardian">Guardian</option>
                </select>
            </fieldset>

            <!-- Academic Information -->
            <fieldset class="mb-5 rounded-md border border-gray-300 p-[15px]">
                <legend class="font-bold text-blue-600">
                    Academic Information
                </legend>

                <label for="student_id" class="mb-[5px] mt-3 block">Student ID:</label>
                <input type="text" id="student_id" name="student_id" 
                    class="box-border w-full rounded border border-gray-300 p-[9px] focus:border-blue-500 focus:outline-none">

                <label for="faculty" class="mb-[5px] mt-3 block">Faculty:</label>
                <input type="text" id="faculty" name="faculty"
                    class="box-border w-full rounded border border-gray-300 p-[9px] focus:border-blue-500 focus:outline-none">

                <label for="department" class="mb-[5px] mt-3 block">Department:</label>
                <input type="text" id="department" name="department" 
                    class="box-border w-full rounded border border-gray-300 p-[9px] focus:border-blue-500 focus:outline-none">

                <label for="class" class="mb-[5px] mt-3 block">Class:</label>
                <input type="text" id="class" name="class" 
                    class="box-border w-full rounded border border-gray-300 p-[9px] focus:border-blue-500 focus:outline-none">

                <label for="reg_date" class="mb-[5px] mt-3 block">Registration Date:</label>
                <input type="date" id="reg_date" name="reg_date" 
                    class="box-border w-full rounded border border-gray-300 p-[9px] focus:border-blue-500 focus:outline-none">
            </fieldset>

            <button type="submit"
                class="w-full cursor-pointer rounded bg-blue-600 p-3 text-white transition-colors hover:bg-blue-800">
                Submit Information
            </button>

        </form>
    </div>

    <?php 
    
   
    ?>

</body>
</html>
