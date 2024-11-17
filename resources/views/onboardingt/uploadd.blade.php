<div class="max-w-4xl w-full mx-auto p-8 bg-white shadow-lg rounded-lg">
        <h2 class="text-2xl font-semibold text-gray-800 mb-6 text-center">Upload Documents</h2>

        <form id="uploadForm" action="{{ route('documents.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">

                <!-- Identification and Background Verification -->
                <div class="border rounded-lg p-6">
                    <h3 class="text-lg font-semibold text-gray-700 mb-2">Identification and Background Verification</h3>
                    <p class="text-sm text-gray-500 mb-4">Upload your ID, background check, and other verification documents.</p>
                    <input type="file" id="identification-docs" name="identification_docs[]" class="block w-full text-gray-700 bg-gray-50 border border-gray-300 rounded-lg cursor-pointer focus:outline-none" />
                    <button onclick="uploadFile()" class="px-4 py-2 bg-blue-500 text-white font-semibold rounded-lg hover:bg-blue-600">Upload</button>
                </div>

                <!-- Employee Agreement and Policy Acknowledgements -->
                <div class="border rounded-lg p-6">
                    <h3 class="text-lg font-semibold text-gray-700 mb-2">Employee Agreement and Policy Acknowledgements</h3>
                    <p class="text-sm text-gray-500 mb-4">Please upload signed agreements and policy acknowledgments.</p>
                    <input type="file" id="agreement-docs" name="agreement_docs[]" class="block w-full text-gray-700 bg-gray-50 border border-gray-300 rounded-lg cursor-pointer focus:outline-none" />
                    <button onclick="uploadFile()" class="px-4 py-2 bg-blue-500 text-white font-semibold rounded-lg hover:bg-blue-600">Upload</button>
                </div>

                <!-- Training and Competency Documents -->
                <div class="border rounded-lg p-6">
                    <h3 class="text-lg font-semibold text-gray-700 mb-2">Training and Competency Documents</h3>
                    <p class="text-sm text-gray-500 mb-4">Upload documents showing completion of required training.</p>
                    <input type="file" id="training-docs" name="training_docs[]" class="block w-full text-gray-700 bg-gray-50 border border-gray-300 rounded-lg cursor-pointer focus:outline-none" />
                    <button onclick="uploadFile()" class="px-4 py-2 bg-blue-500 text-white font-semibold rounded-lg hover:bg-blue-600">Upload</button>
                </div>

                <!-- Emergency Contact Information -->
                <div class="border rounded-lg p-6">
                    <h3 class="text-lg font-semibold text-gray-700 mb-2">Emergency Contact Information</h3>
                    <p class="text-sm text-gray-500 mb-4">Upload emergency contact details or related documents.</p>
                    <input type="file" id="emergency-contact-docs" name="emergency_contact_docs[]" class="block w-full text-gray-700 bg-gray-50 border border-gray-300 rounded-lg cursor-pointer focus:outline-none" />
                    
                    <button onclick="uploadFile()" class="px-4 py-2 bg-blue-500 text-white font-semibold rounded-lg hover:bg-blue-600">Upload</button>
                </div>

            </div>

        </form>

    </div>

<script>
    function uploadFile(fileInputId) {
        const fileInput = document.getElementById(fileInputId);
        const formData = new FormData();
        formData.append(fileInputId, fileInput.files[0]);

        const xhr = new XMLHttpRequest();
        xhr.open('POST', '{{ route('documents.store') }}', true);

        xhr.upload.addEventListener('progress', function(event) {
            if (event.lengthComputable) {
                const percentComplete = (event.loaded / event.total) * 100;
                document.getElementById('progressBar').style.width = percentComplete + '%';
                document.getElementById('progressText').innerText = 'Upload Progress: ' + Math.round(percentComplete) + '%';
            }
        });

        xhr.onload = function() {
            if (xhr.status === 200) {
                alert('File uploaded successfully!');
                updateOnboardingProgress();
            } else {
                alert('Error uploading file.');
            }
        };

        xhr.send(formData);
    }

    function updateOnboardingProgress() {
        // Simulate onboarding progress update
        let currentProgress = 0;
        const totalSteps = 4; // Total number of onboarding steps
        const interval = setInterval(() => {
            if (currentProgress < totalSteps) {
                currentProgress++;
                const progressPercentage = (currentProgress / totalSteps) * 100;
                document.getElementById('onboardingProgressBar').style.width = progressPercentage + '%';
                document.getElementById('onboardingPercentage').innerText = Math.round(progressPercentage) + '%';
            } else {
                clearInterval(interval);
            }
        }, 1000); // Update every second
    }
</script>

