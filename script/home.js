const div = document.querySelector("#result");
const btnUsers = document.querySelector("#users");
const btnBooks = document.querySelector("#books");
const btnIdUser = document.querySelector("#submitUser");
const inputIdUser = document.querySelector("#idUser");
const btnIdBook = document.querySelector("#submitBook");
const inputIdBook = document.querySelector("#idBook");

btnUsers.addEventListener("click", async () => {
  const promise = await fetch("/super-week/users");
  const users = await promise.json();
  div.innerHTML = "";
  // if users.error est défini
  if (users.error) {
    const p = document.createElement("p");
    p.innerHTML = users.error;
    div.appendChild(p);
    return;
  }
  users.forEach((user) => {
    const h3 = document.createElement("h3");
    h3.innerHTML = `${user.first_name} ${user.last_name}`;
    div.appendChild(h3);
    const p = document.createElement("p");
    p.innerHTML = `Email: ${user.email}`;
    div.appendChild(p);
  });
});

btnBooks.addEventListener("click", async () => {
  const promise = await fetch("/super-week/books");
  const books = await promise.json();
  div.innerHTML = "";
  // if books.error est défini
  if (books.error) {
    const p = document.createElement("p");
    p.innerHTML = books.error;
    div.appendChild(p);
    return;
  }
  books.forEach((book) => {
    const h3 = document.createElement("h3");
    h3.innerHTML = book.title;
    div.appendChild(h3);
    const p = document.createElement("p");
    p.innerHTML = `Texte: ${book.content}`;
    div.appendChild(p);
    const p2 = document.createElement("p");
    p2.innerHTML = `Id auteur: ${book.id_user}`;
    div.appendChild(p2);
  });
});

btnIdUser.addEventListener("click", async () => {
  const promise = await fetch(`/super-week/users/${inputIdUser.value}`);
  const user = await promise.json();
  div.innerHTML = "";
  // if user.error est défini
  if (user.error) {
    const p = document.createElement("p");
    p.innerHTML = user.error;
    div.appendChild(p);
    return;
  }
  const h3 = document.createElement("h3");
  h3.innerHTML = `${user.first_name} ${user.last_name}`;
  div.appendChild(h3);
  const p = document.createElement("p");
  p.innerHTML = `Email: ${user.email}`;
  div.appendChild(p);
});

btnIdBook.addEventListener("click", async () => {
  const promise = await fetch(`/super-week/books/${inputIdBook.value}`);
  const book = await promise.json();
  div.innerHTML = "";
  // if book.error est défini
  if (book.error) {
    const p = document.createElement("p");
    p.innerHTML = book.error;
    div.appendChild(p);
    return;
  }
  const h3 = document.createElement("h3");
  h3.innerHTML = book.title;
  div.appendChild(h3);
  const p = document.createElement("p");
  p.innerHTML = `Texte: ${book.content}`;
  div.appendChild(p);
  const p2 = document.createElement("p");
  p2.innerHTML = `Id auteur: ${book.id_user}`;
  div.appendChild(p2);
});
