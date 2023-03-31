<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Qrcode Generate</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('../css/app.css') }}">
</head>

<body>
    <div class="container" style="width:50%">
        <form method='POST' action='save'>
            @csrf
            <fieldset>
                <legend>About you</legend>
                <div class="mb-3">
                    <label for="inputName" class="form-label">First Name <span class="required">*</span></label>
                    <input type="text" class="form-control" name="name" id="inputName" placeholder="e.g. John"
                        required>
                </div>
                <div class="mb-3">
                    <label for="inputLastName" class="form-label">Last Name <span class="required">*</span></label>
                    <input type="text" class="form-control" name="last_name" id="inputLastName"
                        placeholder="e.g. Doe" required>
                </div>
                <div class="mb-3">
                    <label for="inputAbout_me" class="form-label">About Me <span class="required">*</span></label>
                    <input type="text" class="form-control" name="about_me" id="inputAbout_me"
                        placeholder="e.g. I'm programming" required>
                </div>
                <div class="mb-3">
                    <label for="inputEmail" class="form-label">Email Address <span class="required">*</span></label>
                    <input type="email" class="form-control" name="email" id="inputEmail"
                        placeholder="e.g. john.doe@example.com" required>
                </div>
                <div class="mb-3">
                    <label for="inputPhone" class="form-label">Phone Number<span class="required">*</span></label>
                    <input type="tel" class="form-control" name="phone" id="inputPhone"
                        placeholder="e.g. (12) 9 9456-7890">
                </div>
            </fieldset>
            <fieldset>
                <legend>Profiles</legend>
                <div class="mb-3">
                    <label for="inputLinkedIn" class="form-label">LinkedIn Profile</label>
                    <input type="url" class="form-control" name="linkedin" id="inputLinkedIn"
                        placeholder="e.g. https://www.linkedin.com/in/johndoe">
                </div>
                <div class="mb-3">
                    <label for="inputGitHub" class="form-label">GitHub Profile</label>
                    <input type="url" class="form-control" name="github" id="inputGitHub"
                        placeholder="e.g. https://github.com/johndoe">
                </div>
                <div class="mb-3">
                    <label for="inputResume" class="form-label">Resume/CV</label>
                    <input type="url" class="form-control" name="resume" id="inputResume"
                        placeholder="e.g. https://drive.com/resume.pdf">
                </div>
                <button type="submit" class="btn btn-outline-secondary mb-3">Generate QrCode</button>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous">
    </script>
</body>

</html>
