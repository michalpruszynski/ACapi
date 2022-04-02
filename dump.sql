--
-- PostgreSQL database dump
--

-- Dumped from database version 13.6
-- Dumped by pg_dump version 13.6

SET statement_timeout = 0;
SET lock_timeout = 0;
SET idle_in_transaction_session_timeout = 0;
SET client_encoding = 'UTF8';
SET standard_conforming_strings = on;
SELECT pg_catalog.set_config('search_path', '', false);
SET check_function_bodies = false;
SET xmloption = content;
SET client_min_messages = warning;
SET row_security = off;

--
-- Data for Name: doctrine_migration_versions; Type: TABLE DATA; Schema: public; Owner: symfony
--

COPY public.doctrine_migration_versions (version, executed_at, execution_time) FROM stdin;
DoctrineMigrations\\Version20220222220807	2022-03-06 12:21:20	8
\.


--
-- Data for Name: product; Type: TABLE DATA; Schema: public; Owner: symfony
--

COPY public.product (id, name, amount) FROM stdin;
2	Produkt 2	12
3	Produkt 5	0
4	Produkt 7	6
5	Produkt 8	2
1	Produkt 1	1
\.


--
-- Name: product_id_seq; Type: SEQUENCE SET; Schema: public; Owner: symfony
--

SELECT pg_catalog.setval('public.product_id_seq', 1, false);


--
-- PostgreSQL database dump complete
--

