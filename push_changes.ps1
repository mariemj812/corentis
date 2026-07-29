# Script pour automatiser l'envoi des modifications vers GitHub
$commitMsg = $args[0]
if ([string]::IsNullOrWhiteSpace($commitMsg)) {
    $commitMsg = "Mise à jour par l'agent IA"
}

Write-Host "Ajout des fichiers modifiés..."
git add .

Write-Host "Création du commit..."
git commit -m $commitMsg

Write-Host "Envoi vers GitHub (push)..."
git push origin main

Write-Host "Terminé !"
