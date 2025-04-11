<?php
// filepath: c:\xampp\htdocs\geo-api\index.php
header("Content-Type: application/json");

// Habilita o relatório de erros para depuração
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Obtém o IP da consulta ou o IP do cliente
$ip = $_GET['ip'] ?? $_SERVER['REMOTE_ADDR'];

// Valida o IP
if (!filter_var($ip, FILTER_VALIDATE_IP)) {
    echo json_encode([
        "status" => "error",
        "message" => "Invalid IP address",
        "input" => $ip
    ]);
    exit;
}

// Faz a consulta à API externa
$response = @file_get_contents("http://ip-api.com/json/{$ip}?fields=status,message,query,country,regionName,city,lat,lon,timezone,isp,continent,as,org");

// Verifica se a consulta falhou
if ($response === false) {
    echo json_encode([
        "status" => "error",
        "message" => "Failed to connect to the external API."
    ]);
    exit;
}

// Decodifica a resposta da API
$data = json_decode($response, true);

// Verifica se a API retornou um erro
if ($data['status'] === 'fail') {
    echo json_encode([
        "status" => "error",
        "message" => $data['message'],
        "input" => $data['query']
    ]);
    exit;
}

// Obtém o nome do host (DNS reverso)
$hostname = @gethostbyaddr($ip);
if ($hostname === false || $hostname === $ip) {
    $hostname = "Hostname not available";
}

// Retorna os dados em formato JSON
echo json_encode([
    "status" => "success",
    "query" => $data['query'],
    "country" => $data['country'],
    "regionName" => $data['regionName'],
    "city" => $data['city'],
    "lat" => $data['lat'],
    "lon" => $data['lon'],
    "timezone" => $data['timezone'],
    "isp" => $data['isp'],
    "continent" => $data['continent'],
    "as" => $data['as'], // ASN (Autonomous System Number)
    "org" => $data['org'], // Organização
    "hostname" => $hostname // Nome do host (DNS reverso)
]);
?>