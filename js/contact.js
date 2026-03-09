async function copiMail() {
  const text = "propcorentin87@gmail.com";
  try {
    await navigator.clipboard.writeText(text);
    //alert("Texte copié !");
  } catch (err) {
    console.error("Échec de la copie :", err);
  }
}