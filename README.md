# 🌍 IP Geolocation Lookup

Aplicação para **consulta de geolocalização com base em IP ou domínio**. Através de uma API própria, o sistema fornece informações detalhadas como país, cidade, provedor de internet (ISP), coordenadas geográficas e outros dados relevantes.

---

## ⚙️ Funcionalidades

- 🔍 **Consulta de IP ou domínio** com retorno de dados completos.
- 📋 **Cópia rápida dos resultados** para a área de transferência.
- 🎨 **Modo claro e escuro**, com transições suaves.
- 🌐 **Interface bilíngue**: Português 🇧🇷 e Inglês 🇺🇸.
- 🛡️ **Validação inteligente de entradas** (IP e domínios).
- ✨ **Experiência fluida** com animações leves e responsivas.

---

## 🧰 Tecnologias Utilizadas

| Tecnologia | Descrição |
|-----------|-----------|
| <img src="https://www.w3.org/html/logo/downloads/HTML5_Badge_512.png" alt="HTML5" width="50"/> | **HTML5** – Estruturação da interface |
| <img src="https://upload.wikimedia.org/wikipedia/commons/6/62/CSS3_logo.svg" alt="CSS3" width="50"/> | **CSS3** – Estilização e temas |
| <img src="https://upload.wikimedia.org/wikipedia/commons/6/6a/JavaScript-logo.png" alt="JavaScript" width="50"/> | **JavaScript** – Lógica da interface e integração com a API |
| <img src="https://upload.wikimedia.org/wikipedia/commons/2/27/PHP-logo.svg" alt="PHP" width="50"/> | **PHP** – Backend da API de geolocalização |
| 🛰️ **Fetch API** – Comunicação assíncrona com o backend |
| 💾 **LocalStorage** – Armazenamento local de preferências (tema e idioma) |

---

## 📁 Estrutura do Projeto

```plaintext
c:\xampp\htdocs\
├── index.html         # Página principal da aplicação
└── geo-api/
    └── index.php      # Backend da API de geolocalização
```

---

## 🚀 Como Executar

### Pré-requisitos
- Ambiente com servidor local (ex: **XAMPP**)
- Navegador moderno e atualizado

### Passo a Passo
1. Copie os arquivos do projeto para a pasta `htdocs` do XAMPP.
2. Inicie o **Apache** no painel de controle do XAMPP.
3. Acesse o sistema via navegador: [http://localhost/index.html](http://localhost/index.html)

---

## 💻 Como Usar

### 🔎 Consulta de IP ou Domínio
- Digite um IP ou domínio válido no campo de busca.
- Clique em **"Consultar"** (ou **"Search"**).

### 📋 Copiar Resultados
- Após a consulta, clique em **"Copiar"** (ou **"Copy"**) para copiar os dados.

### 🌓 Alternar Tema
- Clique no ícone de lua/sol para alternar entre **modo claro** e **modo escuro**.

### 🌐 Trocar Idioma
- Use o seletor no topo direito para mudar entre **Português** e **Inglês**.

---

## 🔮 Melhorias Futuras

- 🌐 Suporte a múltiplos idiomas adicionais  
- 📦 Cache de consultas recentes  
- 📱 Interface otimizada para dispositivos móveis  
- 🗺️ Visualização gráfica interativa das localizações  

---

## 📄 Licença

Este projeto está licenciado sob os termos da **Licença MIT**. Consulte o arquivo [LICENSE](./LICENSE) para mais detalhes.
