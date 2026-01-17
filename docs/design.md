# Design Guideline - Salgadinhos Web

## 🎨 Filosofia de Design

### Brutalismo Leve (Soft Brutalism)
O design do Salgadinhos Web adota uma abordagem de **brutalismo suavizado** - mantendo a força visual e personalidade marcante do brutalismo clássico, mas com elementos que garantem acessibilidade e conforto visual para um público amplo.

**Princípios Core:**
- Honestidade visual: elementos claros e diretos
- Geometria simples e funcional
- Tipografia bold como elemento gráfico
- Sombras sólidas ao invés de difusas
- Interações físicas e tangíveis

---

## 🎨 Paleta de Cores

### Cores Principais

**Laranja Principal**
- `bg-orange-500` (#f97316) - CTAs, destaques, elementos interativos
- `bg-orange-400` (#fb923c) - Hovers, estados ativos
- Uso: Representa energia, crocância, sabor (conexão com salgadinhos)

**Âmbar/Amarelo (Secundário)**
- `bg-amber-300` (#fcd34d) - Acentos, badges, destaques
- `bg-amber-50` (#fffbeb) - Backgrounds suaves
- Uso: Complementa laranja, adiciona calor

**Cinza/Preto**
- `bg-gray-900` (#111827) - Textos principais, bordas, headers
- `bg-gray-700` (#374151) - Textos secundários
- Uso: Contraste forte, legibilidade máxima

**Branco**
- `bg-white` (#ffffff) - Cards, áreas de conteúdo, texto sobre dark
- Uso: Respiro visual, clareza

### Combinações Recomendadas

```
✅ Backgrounds:
- amber-50 (seções claras)
- white (cards, containers)
- gray-900 (header, footer, áreas dark)

✅ CTAs e Botões:
- bg-orange-500 + text-gray-900 + border-gray-900
- bg-gray-900 + text-orange-400

✅ Bordas:
- border-gray-900 (sempre 4-6px de espessura)
- border-orange-500 (acentos)
- border-white (sobre backgrounds dark)
```

---

## ✍️ Tipografia

### Hierarquia de Tamanhos

```
Título Principal (H1):
- text-7xl sm:text-8xl
- font-black
- tracking-tight
- leading-none

Subtítulo (H2):
- text-2xl sm:text-3xl
- font-bold
- leading-tight

Corpo Principal:
- text-lg sm:text-xl
- font-medium

Links/Botões:
- text-lg (botões primários)
- text-base ou text-sm (links secundários)
- font-bold ou font-black
- uppercase + tracking-wide
```

### Peso de Fonte

**Sempre use pesos extremos:**
- `font-black` (900) - Títulos, CTAs, elementos principais
- `font-bold` (700) - Subtítulos, labels, links
- `font-medium` (500) - Corpo de texto
- ❌ Evite: font-normal, font-light (baixo contraste)

### Transformações de Texto

```
✅ Usar:
- uppercase (navegação, botões, badges)
- tracking-wide ou tracking-widest (com uppercase)

❌ Evitar:
- lowercase forçado
- italic (exceto citações)
```

---

## 🔲 Bordas e Sombras

### Bordas

**Espessura Padrão:**
- `border-4` - Elementos pequenos (badges, inputs)
- `border-6` - Elementos médios (cards, botões)
- `border-8` - Elementos grandes (containers principais)

**Regra de Ouro:**
> Bordas devem ser sempre **sólidas e visíveis**. Nunca use border-1 ou border-2.

### Sombras Brutalistas

**Padrão de Sombra Sólida:**
```css
shadow-[XXpx_YYpx_0px_0px_rgba(COR)]
```

**Exemplos Práticos:**
```
Botão Principal:
shadow-[8px_8px_0px_0px_rgba(17,24,39,1)]

Hover (movimento):
shadow-[4px_4px_0px_0px_rgba(17,24,39,1)]
translate-x-[4px] translate-y-[4px]

Card:
shadow-[12px_12px_0px_0px_rgba(17,24,39,1)]

Header:
shadow-[0_8px_0px_0px_rgba(251,146,60,0.3)]
```

**❌ Nunca use:**
- `shadow-sm`, `shadow-md`, `shadow-lg` (sombras difusas)
- Sombras com blur

---

## 🎯 Componentes

### Botões

#### Botão Primário (CTA)
```blade
<a href="#"
   class="inline-flex items-center justify-center gap-3
          bg-orange-500 text-gray-900 font-black text-lg uppercase tracking-wide
          px-12 py-5 
          border-6 border-gray-900
          shadow-[8px_8px_0px_0px_rgba(17,24,39,1)]
          hover:shadow-[4px_4px_0px_0px_rgba(17,24,39,1)]
          hover:translate-x-[4px] hover:translate-y-[4px]
          transition-all duration-150">
    Texto do Botão
</a>
```

#### Botão Secundário
```blade
<a href="#"
   class="px-4 py-2 font-bold text-sm uppercase tracking-wide
          text-white hover:text-gray-900
          hover:bg-orange-400
          border-3 border-transparent hover:border-white
          transition-all duration-150">
    Link Secundário
</a>
```

### Cards/Containers

```blade
<div class="p-6 bg-white 
            border-6 border-gray-900 
            shadow-[12px_12px_0px_0px_rgba(17,24,39,1)]
            hover:shadow-[6px_6px_0px_0px_rgba(17,24,39,1)]
            hover:translate-x-[6px] hover:translate-y-[6px]
            transition-all duration-200">
    <!-- conteúdo -->
</div>
```

### Badges/Tags

```blade
<span class="inline-block px-6 py-2 
             bg-gray-900 text-amber-300 
             font-black text-sm uppercase tracking-widest 
             border-4 border-gray-900 
             shadow-[8px_8px_0px_0px_rgba(251,191,36,1)] 
             rotate-[-2deg]">
    Beta 2025
</span>
```

### Inputs/Forms

```blade
<input type="text" 
       class="w-full px-4 py-3
              bg-white text-gray-900 font-medium
              border-4 border-gray-900
              focus:border-orange-500 focus:outline-none
              shadow-[4px_4px_0px_0px_rgba(17,24,39,1)]
              focus:shadow-[6px_6px_0px_0px_rgba(249,115,22,1)]
              transition-all duration-150">
```

---

## 🎭 Elementos Decorativos

### Formas Geométricas

**Círculos/Quadrados de Fundo:**
```blade
<div class="absolute top-10 left-10 
            w-32 h-32 
            border-8 border-gray-900 
            rotate-12 opacity-10"></div>

<div class="absolute bottom-20 right-10 
            w-40 h-40 
            bg-orange-400 
            opacity-20 -rotate-6"></div>
```

**Regras:**
- Sempre usar `absolute` positioning
- Opacidade entre 10-20% (`opacity-10`, `opacity-20`)
- Rotações sutis (-6deg a 12deg)
- Não interferir na leitura do conteúdo

### Divisores/Separadores

```blade
<!-- Divisor com formas -->
<div class="flex items-center justify-center gap-4 my-10">
    <div class="w-16 h-2 bg-orange-400"></div>
    <div class="w-2 h-2 bg-gray-900 rotate-45"></div>
    <div class="w-16 h-2 bg-gray-900"></div>
</div>

<!-- Barra gradiente -->
<div class="h-1 bg-gradient-to-r from-orange-400 via-amber-300 to-orange-500"></div>

<!-- Linha sólida -->
<div class="h-4 bg-gradient-to-r from-orange-400 via-amber-300 to-orange-500"></div>
```

### Rotações

**Uso correto:**
- `-rotate-1` ou `-rotate-2` - Badges, tags
- `rotate-6` ou `rotate-12` - Elementos decorativos
- ❌ Evite rotações maiores que 12deg em elementos funcionais

---

## ⚡ Interações e Animações

### Princípios de Movimento

**Velocidade:**
- `duration-150` - Botões, links, interações rápidas
- `duration-200` - Cards, containers
- `duration-300` - Transições complexas
- ❌ Nunca use durações acima de 300ms

**Easing:**
- Sempre usar `transition-all` (padrão do Tailwind = ease)
- ❌ Evite easings customizados complexos

### Padrões de Hover

**Efeito "Levantamento" (padrão para botões/cards):**
```
Estado Normal:
shadow-[8px_8px_0px_0px_rgba(17,24,39,1)]

Hover:
shadow-[4px_4px_0px_0px_rgba(17,24,39,1)]
translate-x-[4px] translate-y-[4px]
```

**Efeito "Anti-gravidade" (navegação):**
```
Hover:
shadow-[4px_4px_0px_0px_rgba(255,255,255,1)]
translate-x-[-4px] translate-y-[-4px]
```

**Mudança de Cor:**
```
bg-orange-500 → hover:bg-orange-400
text-white → hover:text-gray-900
border-transparent → hover:border-white
```

### Estados de Foco

```blade
focus:outline-none 
focus:ring-4 focus:ring-orange-300
<!-- ou -->
focus:border-orange-500
focus:shadow-[6px_6px_0px_0px_rgba(249,115,22,1)]
```

---

## 📐 Layout e Espaçamento

### Grid/Container

```blade
<!-- Container principal -->
<div class="max-w-7xl mx-auto px-6 py-5">
    <!-- conteúdo -->
</div>

<!-- Seção full-width -->
<section class="w-full min-h-[85vh] py-20 bg-amber-50">
    <div class="max-w-5xl mx-auto px-8 py-12">
        <!-- conteúdo -->
    </div>
</section>
```

### Espaçamento

**Padding interno:**
- Pequeno: `px-4 py-2` (badges, links)
- Médio: `px-6 py-3` ou `px-8 py-4` (inputs, cards)
- Grande: `px-12 py-5` (botões principais)

**Margin/Gap:**
- Entre elementos: `gap-2`, `gap-4`, `gap-6`
- Entre seções: `my-10`, `my-12`, `my-20`

**Responsividade:**
```blade
<!-- Mobile-first -->
<h1 class="text-6xl sm:text-7xl lg:text-8xl">

<div class="px-4 sm:px-6 lg:px-8">

<nav class="flex flex-col sm:flex-row gap-2 sm:gap-4">
```

---

## 📋 Checklist para Novas Páginas

### Antes de Começar
- [ ] Definir hierarquia de informação
- [ ] Identificar CTAs principais
- [ ] Planejar elementos decorativos (sem exagero)

### Durante o Desenvolvimento
- [ ] Usar paleta de cores definida (laranja-500, amber, gray-900)
- [ ] Bordas sempre 4-6px de espessura
- [ ] Sombras sólidas (nunca blur)
- [ ] Tipografia: font-black para títulos, font-bold para links
- [ ] Uppercase + tracking-wide em botões/navegação
- [ ] Transições rápidas (150-200ms)
- [ ] Efeito de "levantamento" em hovers

### Elementos Obrigatórios
- [ ] Background amber-50 ou white
- [ ] Pelo menos 1 elemento com borda grossa
- [ ] Pelo menos 1 sombra sólida
- [ ] CTAs com bg-orange-500 + border-gray-900
- [ ] Tipografia em uppercase em pelo menos 1 lugar

### Checklist Final
- [ ] Responsividade mobile testada
- [ ] Contraste de cores adequado (WCAG)
- [ ] Hover states funcionando
- [ ] Sem bordas finas (border-1, border-2)
- [ ] Sem sombras difusas (shadow-md, shadow-lg)
- [ ] Consistência visual com outras páginas

---

## 🚫 O Que EVITAR

### ❌ Nunca Use:
- Bordas finas (border, border-1, border-2)
- Sombras com blur (shadow-sm, shadow-md, shadow-lg)
- Rounded excessivo (rounded-full em elementos grandes)
- Gradientes complexos (exceto em barras decorativas)
- Animações longas (> 300ms)
- Font-weight normal ou light
- Cores pastéis ou baixo contraste
- Transparências excessivas (exceto decorativos)

### ⚠️ Use Com Moderação:
- Rotações (máximo 12deg em elementos funcionais)
- Elementos decorativos (máximo 3-4 por seção)
- Uppercase (apenas em navegação, botões, badges)
- Cores além da paleta principal

---

## 💡 Exemplos de Aplicação

### Página de Listagem
```blade
<section class="w-full py-20 bg-white">
    <div class="max-w-7xl mx-auto px-6">
        
        <h1 class="text-5xl font-black text-gray-900 mb-12 
                   border-b-8 border-orange-400 pb-4 inline-block">
            Todos os Salgadinhos
        </h1>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            
            <!-- Card de Salgadinho -->
            <article class="bg-amber-50 p-6 
                           border-6 border-gray-900 
                           shadow-[8px_8px_0px_0px_rgba(17,24,39,1)]
                           hover:shadow-[4px_4px_0px_0px_rgba(17,24,39,1)]
                           hover:translate-x-[4px] hover:translate-y-[4px]
                           transition-all duration-200">
                
                <h3 class="text-2xl font-black text-gray-900 mb-2">
                    Nome do Salgadinho
                </h3>
                
                <p class="text-gray-700 font-medium mb-4">
                    Descrição breve e objetiva.
                </p>
                
                <a href="#" class="inline-block px-6 py-3 
                                   bg-orange-500 text-gray-900 font-bold uppercase
                                   border-4 border-gray-900
                                   shadow-[4px_4px_0px_0px_rgba(17,24,39,1)]
                                   hover:bg-orange-400
                                   transition-all duration-150">
                    Ver Detalhes
                </a>
            </article>

        </div>
    </div>
</section>
```

### Formulário
```blade
<form class="max-w-2xl mx-auto p-8 bg-white 
             border-6 border-gray-900 
             shadow-[12px_12px_0px_0px_rgba(17,24,39,1)]">
    
    <h2 class="text-3xl font-black text-gray-900 mb-6 uppercase">
        Adicionar Salgadinho
    </h2>

    <div class="mb-6">
        <label class="block text-sm font-bold text-gray-900 uppercase tracking-wide mb-2">
            Nome
        </label>
        <input type="text" 
               class="w-full px-4 py-3 bg-white text-gray-900 font-medium
                      border-4 border-gray-900
                      focus:border-orange-500 focus:outline-none
                      shadow-[4px_4px_0px_0px_rgba(17,24,39,1)]
                      transition-all duration-150">
    </div>

    <button type="submit"
            class="w-full px-12 py-4 
                   bg-orange-500 text-gray-900 font-black text-lg uppercase
                   border-6 border-gray-900
                   shadow-[8px_8px_0px_0px_rgba(17,24,39,1)]
                   hover:shadow-[4px_4px_0px_0px_rgba(17,24,39,1)]
                   hover:translate-x-[4px] hover:translate-y-[4px]
                   transition-all duration-150">
        Salvar
    </button>
</form>
```

---

## 🎯 Resumo Rápido

**3 Regras de Ouro:**
1. **Bordas grossas (4-6px)** + **sombras sólidas sem blur**
2. **Tipografia extrema** (font-black/bold) + **uppercase estratégico**
3. **Cores vibrantes** (laranja + cinza-900) + **contraste forte**

**Mantra do Design:**
> "Se não tem borda grossa e sombra sólida, não é brutalista o suficiente. Se o usuário não consegue ler, passou do ponto."

---

**Versão:** 1.0  
**Data:** Janeiro 2025  
**Projeto:** Salgadinhos Web