SELECT 
    C.company_code,
    C.founder,
    COUNT(DISTINCT LM.lead_manager_code) AS lead_managers,
    COUNT(DISTINCT SM.senior_manager_code) AS senior_managers,
    COUNT(DISTINCT M.manager_code) AS managers,
    COUNT(DISTINCT E.employee_code) AS employees
FROM 
    Company C
LEFT JOIN 
    Lead_Manager LM ON C.company_code = LM.company_code
LEFT JOIN 
    Senior_Manager SM ON LM.lead_manager_code = SM.lead_manager_code AND LM.company_code = SM.company_code
LEFT JOIN 
    Manager M ON SM.senior_manager_code = M.senior_manager_code AND SM.lead_manager_code = M.lead_manager_code AND SM.company_code = M.company_code
LEFT JOIN 
    Employee E ON M.manager_code = E.manager_code AND M.senior_manager_code = E.senior_manager_code AND M.lead_manager_code = E.lead_manager_code AND M.company_code = E.company_code
GROUP BY 
    C.company_code, C.founder
ORDER BY 
    C.company_code;