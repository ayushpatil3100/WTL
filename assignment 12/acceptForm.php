<form id="postForm">
  <input type="text" id="username" placeholder="Username" required>
  <button type="submit">Send POST</button>
</form>

<button onclick="sendPut()">Send PUT</button>
<button onclick="sendDelete()">Send DELETE</button>

<script>
  document.getElementById('postForm').addEventListener('submit', async function (e) {
    e.preventDefault();
    const username = document.getElementById('username').value;
    
    const res = await fetch('http://127.0.0.1:3000/12/accept.php', {
      method: 'POST',
      headers: { 'Content-Type': 'application/json' },
      body: JSON.stringify({ username })
    });
    const data = await res.json();
    console.log(data);
  });

  async function sendPut() {
    const res = await fetch('http://127.0.0.1:3000/12/accept.php', {
      method: 'PUT',
      headers: { 'Content-Type': 'application/json' },
      body: JSON.stringify({ updated: "new value" })
    });
    const data = await res.json();
    console.log(data);
  }

  async function sendDelete() {
    const res = await fetch('your-api.php', { method: 'DELETE' });
    const data = await res.json();
    console.log(data);
  }
</script>
