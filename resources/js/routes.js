const Home = () => import('./components/Home.vue')
const Contacto = () => import('./components/Contacto.vue')
const nosotros = () => import('./components/nosotros.vue')




const Mostrar = () => import('./components/blog/Mostrar.vue')
const Crear = () => import('./components/blog/Crear.vue')
const Editar = () => import('./components/blog/Editar.vue')

export const routes = [
    {
        name: 'home',
        path: '/',
        component: Home
    },
    {
        name: 'admin',
        path: '/admin',
        component: Mostrar
    },
    {
        name: 'crearBlog',
        path: '/crear',
        component: Crear
    },
    {
        name: 'editarBlog',
        path: '/editar/:id',
        component: Editar
    },
    {
        name: 'nosotros',
        path: '/nosotros',
        component: nosotros
    },
    {
        name: 'contacto',
        path: '/contacto',
        component: Contacto
    }
]