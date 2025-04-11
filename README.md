# IP Geolocation Lookup

Este é um projeto de consulta de geolocalização baseado em IP ou domínio. Ele utiliza uma API para buscar informações detalhadas sobre a localização de um endereço IP ou domínio fornecido.

## 📋 Funcionalidades

- **Consulta de Geolocalização**: Insira um endereço IP ou domínio para obter informações detalhadas, como país, região, cidade, ISP, latitude, longitude, fuso horário, entre outros.
- **Cópia de Resultados**: Copie os resultados da consulta para a área de transferência com um clique.
- **Suporte a Temas**: Alternância entre tema claro e escuro.
- **Suporte a Idiomas**: Interface disponível em Português e Inglês.
- **Validação de Entrada**: Verifica se o IP ou domínio inserido é válido antes de realizar a consulta.
- **Animação Suave**: Transições suaves para mudanças de tema e atualizações de conteúdo.

## 🛠️ Tecnologias Utilizadas

### Linguagens e Ferramentas

- **HTML5**  
  ![HTML5](https://upload.wikimedia.org/wikipedia/commons/8/8d/HTML5_Badge.svg)

- **CSS3**  
  ![CSS3](https://upload.wikimedia.org/wikipedia/commons/6/62/CSS3_logo.svg)

- **JavaScript**  
  ![JavaScript](https://upload.wikimedia.org/wikipedia/commons/6/6a/JavaScript-logo.png)

- **PHP (para a API)**  
  ![PHP](https://upload.wikimedia.org/wikipedia/commons/2/27/PHP-logo.svg)

- **Fetch API**: Para comunicação com o backend.

- **LocalStorage**: Para persistência de tema e idioma selecionados.

## 📂 Estrutura do Projeto

```plaintext
c:\xampp\htdocs\
├── [index.html](http://_vscodecontentref_/0)       # Arquivo principal do projeto
├── geo-api/
│   └── index.php    # Backend para consulta de geolocalização

🚀 Como Executar o Projeto
Pré-requisitos:

Servidor local como XAMPP ou similar.
Navegador moderno com suporte a JavaScript.
Configuração:

Coloque os arquivos do projeto na pasta htdocs do XAMPP.
Certifique-se de que o servidor Apache e o MySQL estão em execução.
Execução:

Acesse o projeto no navegador através do endereço: http://localhost/index.html.

🌐 Uso da Interface
Consulta de IP/Domínio:

Insira um endereço IP ou domínio válido no campo de entrada.
Clique no botão "Search" (ou "Consultar", dependendo do idioma selecionado).
Cópia de Resultados:

Após a consulta, clique no botão "Copy" (ou "Copiar") para copiar os resultados para a área de transferência.
Alternância de Tema:

Clique no ícone de lua/sol no canto superior direito para alternar entre os temas claro e escuro.
Alteração de Idioma:

Use o seletor de idioma no canto superior direito para alternar entre Português e Inglês.

📷 Capturas de Tela
Tema Claro
<img alt="Tema Claro" src="https://via.placeholder.com/400x300?text=Tema+Claro">
Tema Escuro
<img alt="Tema Escuro" src="https://via.placeholder.com/400x300?text=Tema+Escuro">

📝 Melhorias Futuras
Adicionar suporte a mais idiomas.
Implementar um sistema de cache para consultas recentes.
Melhorar a interface para dispositivos móveis.
Adicionar gráficos para visualização de dados de geolocalização.

📄 Licença
Este projeto está sob a licença MIT. Consulte o arquivo LICENSE para mais informações.
