<form id="postForm">
  <input type="file" id="file" name="file" required>
  <button type="submit">Send POST</button>
  <p id="result">Result</p>
</form>

<script>
  document.getElementById('postForm').addEventListener('submit', async function (e) {
    e.preventDefault();
    
    const formData = new FormData();
    formData.append('file', document.getElementById('file').files[0]);

    const res = await fetch('http://127.0.0.1:3000/13/fileupload.php', {
      method: 'POST',
      body: formData 
    });

    const data = await res.json();
    console.log(data);
    document.getElementById('result').innerHTML=data?.message || "No message"
  });
</script>
