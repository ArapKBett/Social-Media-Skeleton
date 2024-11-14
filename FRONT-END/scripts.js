// scripts.js
async function createPost() {
    const content = document.getElementById('post-content').value;
    const response = await fetch('posts.php', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json'
        },
        body: JSON.stringify({ user_id: 1, content })
    });

    if (response.ok) {
        loadPosts();
    }
}

async function loadPosts() {
    const response = await fetch('posts.php');
    const posts = await response.json();
    const postsSection = document.getElementById('posts');
    postsSection.innerHTML = '';

    posts.forEach(post => {
        const postElement = document.createElement('div');
        postElement.className = 'post';
        postElement.textContent = post.content;
        postsSection.appendChild(postElement);
    });
}

document.addEventListener('DOMContentLoaded', loadPosts);
