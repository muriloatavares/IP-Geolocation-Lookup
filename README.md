# 🌍 IP Geolocation Lookup

Projeto para consulta de **geolocalização baseada em IP ou domínio**. A aplicação utiliza uma API própria para buscar informações detalhadas como país, cidade, ISP, latitude, longitude, entre outros dados relevantes.

---

## ⚙️ Funcionalidades

- 🔍 **Consulta de IP/Domínio** com dados detalhados.
- 📋 **Cópia rápida dos resultados** para a área de transferência.
- 🎨 **Tema claro e escuro** com transições suaves.
- 🌐 **Interface bilíngue**: Português 🇧🇷 e Inglês 🇺🇸.
- 🛡️ **Validação de entradas** para IPs e domínios.
- ✨ **Experiência fluida** com animações leves.

---

## 🧰 Tecnologias Utilizadas

| Tecnologia | Descrição |
|-----------|-----------|
| ![HTML5](https://upload.wikimedia.org/wikipedia/commons/8/8d/HTML5_Badge.svg) | **HTML5** - Estrutura da interface |
| ![CSS3](https://upload.wikimedia.org/wikipedia/commons/6/62/CSS3_logo.svg) | **CSS3** - Estilização e temas |
| ![JavaScript](https://upload.wikimedia.org/wikipedia/commons/6/6a/JavaScript-logo.png) | **JavaScript** - Lógica da interface e comunicação com a API |
| ![PHP](https://upload.wikimedia.org/wikipedia/commons/2/27/PHP-logo.svg) | **PHP** - Backend da API de geolocalização |
| 🛰️ **Fetch API** - Requisições assíncronas |
| 💾 **LocalStorage** - Persistência de preferências (tema e idioma) |

---

## 📁 Estrutura do Projeto

```
c:\xampp\htdocs\
├── index.html         # Página principal da aplicação
└── geo-api/
    └── index.php      # Backend da API de geolocalização
```

---

## 🚀 Como Executar

### Pré-requisitos
- Servidor local (como **XAMPP**)
- Navegador moderno

### Passo a Passo
1. Copie os arquivos do projeto para a pasta `htdocs` do XAMPP.
2. Inicie o **Apache** no painel de controle do XAMPP.
3. Acesse no navegador: [http://localhost/index.html](http://localhost/index.html)

---

## 💻 Como Usar

### 🔎 Consulta de IP ou Domínio
- Digite um IP ou domínio válido no campo de busca.
- Clique em **"Consultar"** / **"Search"**.

### 📋 Copiar Resultados
- Após a consulta, clique em **"Copiar"** / **"Copy"** para salvar os dados na área de transferência.

### 🌓 Alternar Tema
- Clique no ícone de lua/sol para mudar entre **modo claro** e **modo escuro**.

### 🌐 Trocar Idioma
- Use o seletor no topo direito para escolher entre **Português** e **Inglês**.

---

## 🖼️ Capturas de Tela

<p align="center">
  <img src="https://via.placeholder.com/400x300?text=Tema+Claro" alt="Tema Claro" width="300"/>
  <img src="https://via.placeholder.com/400x300?text=Tema+Escuro" alt="Tema Escuro" width="300"/>
</p>

---

## 🧪 Melhorias Futuras

- ✅ Suporte a mais idiomas
- ✅ Cache de consultas recentes
- ✅ Interface aprimorada para mobile
- ✅ Visualização gráfica dos dados geográficos

---

## 📄 Licença

Distribuído sob a licença **MIT**. Consulte o arquivo [LICENSE](./LICENSE) para mais informações.
